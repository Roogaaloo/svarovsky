@extends('layout')

@section('content')

    @include('partitials.static_photo')

@if($categories)
    <section id="categories">
        <div class="container hp-categories">
            <div class="row">
                @foreach($categories as $category)
                    <a href="{{ route('categories.detail', $category->href) }}">
                        <div class="col-sm-4 text-center category-card">
                            <h2>{{ $category->name }}</h2>
                            <p>{{ $category->perex }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif

@endsection