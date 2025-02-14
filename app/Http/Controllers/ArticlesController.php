<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use ParsedownExtra;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = collect(File::files(base_path('my-articles')))
            ->map(function ($file) {
                $content = File::get($file->getPathname());
                $metadata = $this->parseMetadata($content);
                return [
                    'title' => $metadata['title'] ?? 'Untitled',
                    'date' => $metadata['date'] ?? date('Y-m-d'),
                    'author' => $metadata['author'] ?? 'Anonymous',
                    'slug' => Str::slug($metadata['title'] ?? $file->getFilenameWithoutExtension())
                ];
            })
            ->sortByDesc('date')
            ->values();

        return view('articles', compact('articles'));
    }

    public function show($slug)
    {
        $articles = collect(File::files(base_path('my-articles')));
        $article = $articles->first(function ($file) use ($slug) {
            $content = File::get($file->getPathname());
            $metadata = $this->parseMetadata($content);
            return Str::slug($metadata['title'] ?? $file->getFilenameWithoutExtension()) === $slug;
        });

        if (!$article) {
            abort(404);
        }

        $content = File::get($article->getPathname());
        $metadata = $this->parseMetadata($content);
        $parsedown = new ParsedownExtra();
        $htmlContent = $parsedown->text($this->stripMetadata($content));

        return view('article', [
            'title' => $metadata['title'] ?? 'Untitled',
            'date' => $metadata['date'] ?? date('Y-m-d'),
            'author' => $metadata['author'] ?? 'Anonymous',
            'content' => $htmlContent
        ]);
    }

    private function parseMetadata($content)
    {
        $pattern = '/^---\n(.*?)\n---/s';
        if (preg_match($pattern, $content, $matches)) {
            $yaml = $matches[1];
            $metadata = [];
            foreach (explode("\n", $yaml) as $line) {
                if (preg_match('/^(\w+):\s*(.*)$/', $line, $matches)) {
                    $metadata[$matches[1]] = trim($matches[2]);
                }
            }
            return $metadata;
        }
        return [];
    }

    private function stripMetadata($content)
    {
        return preg_replace('/^---\n.*?\n---\n/s', '', $content);
    }
}