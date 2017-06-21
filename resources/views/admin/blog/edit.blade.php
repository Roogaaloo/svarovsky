@extends('admin.layout')

@section('content')

    <section>
        <h1>{{ $heading }}</h1>

        <form action="{{ route('admin.blog.update',[$article->id]) }}" method="post">
            {!! csrf_field() !!}

            <div class="form-group">
                <label>Název</label>
                <input class="form-control" type="text" name="title" value="{{ $article->title }}">
            </div>
            <div class="form-group">
                <label>URL</label>
                <input class="form-control" type="text" name="href" value="{{ $article->href }}">
            </div>
            <div class="form-group">
                <label>Perex</label>
                <input class="form-control" type="text" name="perex" value="{{ $article->perex }}">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea id="text" name="text">{{ $article->text }}</textarea>
                @ckeditor('text', ['height' => 200])
            </div>

            <div class="form-group">
                <label>Obrázek</label>
                <input class="form-control" type="file" name="image">
                @if($article->image)<img src="/img/{{ $article->image }}" width="200px">@else Fotka nepřiřazena @endif
            </div>

            <div class="form-group">
                <input type="checkbox" name="status" value="1" @if($article->status) checked @endif>
                <label>Status</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="hp_status" value="1" @if($article->hp_status) checked @endif>
                <label>Zobrazit na homepage</label>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Upravit" class="btn">
                <a href="{{ route('admin.blog.list') }}" class="btn">Zpět</a>
            </div>
        </form>
    </section>



@endsection
