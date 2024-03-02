@extends('layouts.app')
@section('content')
<div class="title_container">
    <h1 class="title">INFORMAZIONI SULL'EVENTO</h1>
</div>

<div class="col_container">
    <div class="row show-card">
        {{-- noi dobbiamo fare il forheact di questo --}}
        <div class="col-12 ms_col">
            <div class="card">
                <div class="card-body info-card">
                    <span>Nome dell'evento: {{ $event -> title }}</span>
                    <span>Descrizione dell'evento: {{ $event -> description }}</span>
                    <span>Data dell'evento: {{ $event -> date }}</span>
                    <span>ID UTENTE: {{ $event -> user_id }}</span>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="button_container">
    <button class="ms_button">
        <a href="{{route('event.index')}}">TORNA ALLA PAGINA PRINCIPALE</a>
    </button>
</div>
@endsection