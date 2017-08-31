@extends('layout')
@section('styles')
    <link media="all" type="text/css" rel="stylesheet" href="/revolution/css/settings.css">
    <link media="all" type="text/css" rel="stylesheet" href="/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
@endsection
@section('content')
    @include('partitials.slider')
    <h1 class="hidden">Ing. Jiří Svarovský</h1>
    @if($home_text)
        <section class="padding shadow-background home-text-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 photo-hp" style="background-image:url({{ $home_text->media }});">
                    </div>
                    <div class="col-sm-6 text-about">
                        @if($home_text->heading)<h2>{{ $home_text->heading }}</h2>@endif
                        @if($home_text->text){!! $home_text->text !!}@endif<br />
                        <a href="{{ route('template.about') }}" class="btn">Více</a>
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
                            <div class="col-sm-4 col-xs-6 text-center category-card" onclick="location.href='{{ route('categories.detail', $category->href) }}'">
                                <h2>{{ $category->name }}</h2>
                                <p>{{ $category->perex }}</p>
                                <a href="{{ route('categories.detail', $category->href) }}" class="category-btn">Více</a>
                            </div>
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
                    <div class="col-sm-6 photo-hp" style="background-image:url({{ $home_text->media }});">
                    </div>
                    <div class="col-sm-6 text-about">
                        @if($home_text->heading)<h2>{{ $home_text->heading }}</h2>@endif
                        @if($home_text->text){!! $home_text->text !!}@endif<br />
                        <a href="{{ route('template.about') }}" class="btn">Více</a>
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
                            <div class="reference-item" onclick="location.href='{{ route('reference.list') }}'">
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
                        <div class="col-sm-5 hp-article" onclick="location.href='{{ route('blog.detail', $article->href) }}'">
                            <div class="blog-icon">
                                <i class="fa fa-sticky-note-o"></i>
                            </div>
                            <div class="blog-content">
                                <h3>{{ $article->title }}</h3>
                                <div class="blog-date">{{ $article->date }}</div>
                                <p>{{ $article->perex }}</p>
                                <a href="{{ route('blog.detail', $article->href) }}" class="btn">Číst více</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if($partners)
        <?php $a = 0; ?>
        <section id="partners" >
            <div class="container hp-partners">
                <div class="row">
                    <div class="col-sm-12 text-center header-block">
                        <h2>Partneři</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($partners as $partner)
                        @if($a < 6)
                            <div class="col-xs-2 col-sm-3 col-md-2 text-center partner-item">
                                <img src="{{ $partner->image }}" alt="{{ $partner->name }}" class="img-responsive">
                            </div>
                            <?php $a++; ?>
                        @endif
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
@section('scripts')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery("#slider1").revolution({
                sliderType: "normal",
                sliderLayout: "fullwidth",
                delay: 9000,
                autoHeight: "on",
                minHeight: 200,
                responsiveLevels: [1240, 1025, 778, 480],
                navigation: {
                    arrows: {enable: true}
                },
                gridwidth: 1920,
                gridheight: [800, 800, 1100, 1800]
            }).show(500);
        });
    </script>
@endsection


