@extends('layouts.app')
@section('content')

<div class="title_container">
    <h1 class="title">MODIFICA L'EVENTO</h1>
</div>

<form action="{{ route('event.update', $event->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label for="title">Titolo: </label>
    <input type="text" name="title" id="title" value="{{$event -> title}}">
    <br>
    <label for="description">Descrizione: </label>
    <input type="text" name="description" id="description" value="{{$event -> description}}">
    <br>
    <label for="date">Data: </label>
    <input type="text" name="date" id="date" value="{{$event -> date}}">
    <br>
    <input type="submit" value="UPDATE">
</form>

<div class="button_container">
    <button class="ms_button">
        <a href="#">TORNA ALLA PAGINA PRINCIPALE</a>
    </button>
</div>
@endsection