@extends('admin.layout')



@section('content')

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1>Admin</h1>
                        <br />
                        <br />
                        <br />
                        <br />
                        <textarea id="bodyField"></textarea>

                        @ckeditor('bodyField', ['height' => 400])
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />

                    </div>
                </div>
            </div>
        </section>


@endsection


