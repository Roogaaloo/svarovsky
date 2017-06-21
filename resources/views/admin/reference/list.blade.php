@extends('admin.layout')

@section('content')

@if($references)
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
                        @foreach($references as $reference)
                            <tr>
                                <td>{{ $reference->id }}</td>
                                <td>{{ $reference->title }}</td>
                                <td>{{ $reference->perex }}</td>
                                <td>{{ $reference->created_at }}</td>
                                <td><a href="{{ route('admin.blog.edit', $reference->id) }}"><i class="fa fa-pencil"></i> Upravit</a></td>
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