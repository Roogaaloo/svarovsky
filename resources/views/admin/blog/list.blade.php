@extends('admin.layout')

@section('content')

@if($articles)
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Blog</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped">
                        <thead style="font-weight: 600;">
                            <tr>
                                <td>ID</td>
                                <td>Jméno</td>
                                <td>Krátký popis</td>
                                <td>Datum vytvoření</td>
                                <td>Akce</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->perex }}</td>
                                <td>{{ $article->created_at }}</td>
                                <td><a href="{{ route('admin.blog.edit', $article->id) }}"><i class="fa fa-pencil"></i> Upravit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
@endif

@endsection