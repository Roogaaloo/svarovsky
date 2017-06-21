@extends('admin.layout')

@section('content')

@if($categories)
    <section>


                    <h1>{{ $heading }}</h1>


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
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ substr($category->perex, 0,45) }}...</td>
                                <td>{{ $category->created_at }}</td>
                                <td><a href="{{ route('admin.categories.edit', $category->id) }}"><i class="fa fa-pencil"></i> Upravit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


    </section>
@endif

@endsection