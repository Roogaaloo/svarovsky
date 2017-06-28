@extends('admin.layout')

@section('content')

    <section>
        <h1>{{ $heading }}</h1>
        Administrace se připravuje
        <form class="hidden" action="{{ route('admin.partners.store') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}


            <div class="form-group">
                <label>Pojištění</label>
                <input class="form-control" type="file" name="pojisteni">
                @foreach($pojisteni as $p)
                    @if($p->image)<img src="/{{ $p->image }}" width="150px">@else Fotka nepřiřazena @endif
                @endforeach
            </div>

            <br />

            <div class="form-group">
                <label>Investiční společnosti</label>
                <input class="form-control" type="file" name="inv_spol">
                @foreach($inv_spol as $p)
                    @if($p->image)<img src="/{{ $p->image }}" width="150px">@else Fotka nepřiřazena @endif
                @endforeach
            </div>

            <br />

            <div class="form-group">
                <label>Hypoteční úvěry</label>
                <input class="form-control" type="file" name="hypoteka">
                @foreach($hypoteka as $p)
                    @if($p->image)<img src="/{{ $p->image }}" width="150px">@else Fotka nepřiřazena @endif
                @endforeach
            </div>

            <br />

            <div class="form-group">
                <label>Stavební spoření</label>
                <input class="form-control" type="file" name="stavebni">
                @foreach($stavebni as $p)
                    @if($p->image)<img src="/{{ $p->image }}" width="150px">@else Fotka nepřiřazena @endif
                @endforeach
            </div>

            <br />

            <div class="form-group">
                <label>Úvěry fyzickým osobám</label>
                <input class="form-control" type="file" name="uvery">
                @foreach($uvery as $p)
                    @if($p->image)<img src="/{{ $p->image }}" width="150px">@else Fotka nepřiřazena @endif
                @endforeach
            </div>

            <br />

            <div class="form-group">
                <label>Doplňkové penzijní spoření</label>
                <input class="form-control" type="file" name="penzijni">
                @foreach($penzijni as $p)
                    @if($p->image)<img src="/{{ $p->image }}" width="150px">@else Fotka nepřiřazena @endif
                @endforeach
            </div>

            <br />

            <div class="form-group">
                <label>Nefinanční produkty</label>
                <input class="form-control" type="file" name="nefinancni">
                @foreach($nefinancni as $p)
                    @if($p->image)<img src="/{{ $p->image }}" width="150px">@else Fotka nepřiřazena @endif
                @endforeach
            </div>




            <div class="form-group">
                <input type="submit" name="submit" value="Upravit" class="btn">
            </div>
        </form>
    </section>



@endsection
