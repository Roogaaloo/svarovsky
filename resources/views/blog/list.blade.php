@extends('layout')

@section('content')

@if($articles)
    <section id="articles" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center header-block">
                    <h1>Blog</h1>
                </div>
            </div>
            <div class="row">
                @foreach($articles as $article)
                    <a href="{{ route('blog.detail', $article->href) }}">
                        <div class="col-sm-4">
                            <h3>{{ $article->title }}</h3>
                            <p>{{ $article->perex }}</p>
                            <a href="blog/article/{{ $article->href }}" class="btn">Číst více</a>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif

@endsection