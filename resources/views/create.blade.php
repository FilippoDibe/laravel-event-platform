@extends('layouts.app')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1>Create new Event</h1>
    <form method="POST" enctype="multipart/form-data">

    @csrf
    @method("POST")

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title">
    <br>

    <label for="description">Descrizione</label>
    <input type="description" name="description" id="description">
    <br>

    <label for="date">Data</label>
    <input type="date" name="date" id="data">
    <br>

    <label for="user_id">User id</label>
    <select name="user_id" id="user_id">
        @foreach ($users as $user)
            <option value="{{ $user -> name }}"></option>
        @endforeach
    </select>
    <br>

    <input type="submit" value="Crea">
</form>
@endsection
