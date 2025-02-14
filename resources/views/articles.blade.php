@extends('app')

@section('content')
<div class="container mt-5">
    <h1>Articles</h1>
    <div class="row mt-4">
        @foreach($articles as $article)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text">
                            <small class="text-muted">
                                {{ $article['date'] }} | {{ $article['author'] }}
                            </small>
                        </p>
                        <a href="{{ route('article.show', ['slug' => $article['slug']]) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection