@extends('layout')

@section('content')

    @include('partitials.static_photo')

    @if($references)
        <section id="references">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center header-block">
                        <h1>Reference</h1>
                    </div>
                </div>
                <?php $i = 1; ?>
                <div class="row reference-row">
                    <div class="col-sm-6 reference-card">
                        <form action="{{ route('reference.addComment') }}" method="post">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-sm-12 reference-add-heading">
                                    <h2>Přidat recenzi</h2>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input class="form-control" type="text" name="name" placeholder="Jméno a příjmení">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="text" placeholder="Recenze"></textarea>
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <input type="submit" name="submit" value="Potvrdit" class="btn" style="margin-top: 5px;">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if($i == 2)</div>@endif

                @foreach($references as $reference)

                    @if($i == 2 or $i%2 == 0)<div class="row reference-row">@endif

                            <div class="col-sm-6 reference-card">
                                <div class="reference-icon">
                                    <i class="fa fa-user-circle-o"></i>
                                </div>
                                <div class="reference-content">
                                    <h2>{{ $reference->name }}</h2>
                                    <p>"{{ $reference->text }}"</p>
                                </div>
                            </div>

                        <?php $i++; ?>
                    @if($i == 2 or $i%2 == 0)</div>@endif
                @endforeach

            </div>
        </section>
    @endif

@endsection