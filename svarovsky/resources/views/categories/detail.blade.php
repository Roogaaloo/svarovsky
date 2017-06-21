@extends('layout')

@section('content')

    @include('partitials.static_photo')
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center header-block">
                    <h1>{{ $category->name }}</h1>
                </div>
                <div class="@if($p) col-sm-7 @else col-sm-10 @endif col-sm-offset-1">
                    <p>{!! $category->description !!}</p>
                </div>
                @if($p)
                    <div class="col-sm-3 product-navigation">
                        <h2>Služby produktu</h2>
                        <ul>
                            @foreach($products as $product)
                                <li>
                                    <a href="{{ route('categories.product', [$category->href, $product->href]) }}" title="{{ $product->perex }}"><h3>{{ $product->name }}</h3></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-right">
                    <a href="{{ route('categories.list') }}" class="btn">Zpět</a>
                </div>
            </div>
        </div>

@endsection