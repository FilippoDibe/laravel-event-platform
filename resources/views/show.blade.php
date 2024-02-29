@extends('layouts.app')
@section('content')
    <div class="title_container">
        <h1 class="title">INFORMAZIONI SULL'EVENTO</h1>
    </div>

    <div class="col_container">
        <div class="row">
            {{-- noi dobbiamo fare il forheact di questo  --}}
            <div class="col-lg-4 col-md-6 col-sm-12 ms_col">

                {{-- Le tre voci qui sotto sono solo a titolo esemplificativo --}}
                <span>Nome dell'evento: </span>
                <span>Descrizione dell'evento: </span>
                <span>Data dell'evento: </span>


            </div>
        </div>
    </div>

    <div class="button_container">
        <button class="ms_button">
            <a href="#">TORNA ALLA PAGINA PRINCIPALE</a>
        </button>
    </div>
@endsection
