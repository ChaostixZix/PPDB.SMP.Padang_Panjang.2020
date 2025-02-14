<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        $articles = [
            [
                'title' => 'Welcome to PPDB SMP Padang Panjang',
                'slug' => 'welcome-to-ppdb-smp-padang-panjang',
                'content' => '<p>Welcome to the online registration system for SMP Padang Panjang. This platform allows you to easily register and track your application status.</p>',
                'author' => 'Admin',
                'date' => '2023-12-01'
            ],
            [
                'title' => 'Registration Guidelines',
                'slug' => 'registration-guidelines',
                'content' => '<p>Here are the steps to register:<br>1. Fill out the online form<br>2. Upload required documents<br>3. Wait for verification</p>',
                'author' => 'Admin',
                'date' => '2023-12-02'
            ],
            [
                'title' => 'Important Dates',
                'slug' => 'important-dates',
                'content' => '<p>Key dates for the registration process:<br>- Registration opens: January 1, 2024<br>- Registration closes: March 31, 2024<br>- Announcement: April 15, 2024</p>',
                'author' => 'Admin',
                'date' => '2023-12-03'
            ]
        ];

        foreach ($articles as $article) {
            DB::table('articles')->insert($article);
        }
    }
}