@extends('app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article>
                <h1 class="mb-4">{{ $title }}</h1>
                <div class="text-muted mb-4">
                    {{ $date }} | {{ $author }}
                </div>
                <div class="article-content">
                    {!! $content !!}
                </div>
                <div class="mt-4">
                    <a href="{{ route('articles') }}" class="btn btn-outline-primary">&larr; Back to Articles</a>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection