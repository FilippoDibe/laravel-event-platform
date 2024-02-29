@extends('layouts.app')
@section('content')
    <div class="title_container">
        <h1 class="title">STAMPA DEGLI EVENTI</h1>
    </div>

    <div class="button_container">
        <button class="ms_button">
            <a href="{{ route('event.create') }}">AGGIUNGI NUOVO EVENTO</a>
        </button>
    </div>

    <div class="col_container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 ms_col">

                {{-- Le tre voci qui sotto sono solo a titolo esemplificativo --}}
                <span>Nome dell'evento: </span>
                <span>Data dell'evento: </span>

                {{-- bottone destroy --}}
                <button type="button" class="btn btn-outline-danger">Danger</button>


            </div>
        </div>
    </div>
@endsection
