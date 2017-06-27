@extends('layout')



@section('content')

    @include('partitials.slider')

    @if($home_text)
        <section id="home-text" class="padding shadow-background home-text-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" style="background-image:url({{ $home_text->media }});background-size: cover;background-position: center center;height:350px;">
                    </div>
                    <div class="col-sm-6 text-about">
                        @if($home_text->heading)<h2>{{ $home_text->heading }}</h2>@endif
                        @if($home_text->text){!! $home_text->text !!}@endif<br />
                        <a herf="{{ route('template.about') }}" class="btn">Více</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($categories)
        <section id="categories">
            <div class="container hp-categories">
                <div class="row">
                    @foreach($categories as $category)
                        <a href="{{ route('categories.detail', $category->href) }}">
                            <div class="col-sm-4 col-xs-6 text-center category-card">
                                <h2>{{ $category->name }}</h2>
                                <p>{{ $category->perex }}</p>
                                <a href="{{ route('categories.detail', $category->href) }}" class="category-btn">Více</a>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="{{ route('categories.list') }}" class="btn btn-more">Více produktů</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($home_text)
        <section id="home-text" class="padding shadow-background home-text-desktop">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" style="background-image:url({{ $home_text->media }});background-size: cover;background-position: center center;height:350px;">
                    </div>
                    <div class="col-sm-6 text-about">
                        @if($home_text->heading)<h2>{{ $home_text->heading }}</h2>@endif
                        @if($home_text->text){!! $home_text->text !!}@endif<br />
                        <a herf="{{ route('template.about') }}" class="btn">Více</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($references)
        <section id="references" class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 single-item text-center">
                        @foreach($references as $reference)
                            <div class="reference-item">
                                <div class="reference-icon reference-icon-hp">
                                    <i class="fa fa-user-circle-o"></i>
                                </div>
                                <h3>{{ $reference->name }}</h3>
                                <p>"{{ $reference->text }}"</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($articles)
        <section id="articles" class="padding shadow-background homepage">
            <div class="container">
                <div class="row">
                    @foreach($articles as $article)
                        <a href="{{ route('blog.detail', $article->href) }}">
                            <div class="col-sm-5 hp-article">
                                <div class="blog-icon">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </div>
                                <div class="blog-content">
                                    <h3>{{ $article->title }}</h3>
                                    <p>{{ $article->perex }}</p>
                                    <a href="{{ route('blog.detail', $article->href) }}" class="btn">Číst více</a>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if($partners)
        <section id="partners" >
            <div class="container hp-partners">
                <div class="row">
                    <div class="col-sm-12 text-center header-block">
                        <h2>Parneři</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($partners as $partner)
                        <div class="col-xs-3 text-center partner-item">
                            <img src="{{ $partner->image }}" alt="{{ $partner->name }}" class="img-responsive">
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="{{ route('template.about') }}#partners" class="btn">Více</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection


