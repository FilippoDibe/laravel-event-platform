@extends('layouts.app')
@section('content')
<div class="title_container">
    <h1 class="title">STAMPA DEGLI EVENTI</h1>
</div>
@auth
<div class="button_container">
    <button class="ms_button">
        <a href="{{ route('event.create') }}">AGGIUNGI NUOVO EVENTO</a>
    </button>
</div>
@endauth
<div class="col_container">
    <div class="row">
        @foreach ($events as $event)

        <div class="col-lg-4 col-md-6 col-sm-12 ms_col">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('event.show', $event->id)}}" class="info-card">

                        {{-- Le tre voci qui sotto sono solo a titolo esemplificativo --}}
                        <span>Nome dell'evento: {{ $event->title }}</span>
                        <span>Data dell'evento: {{ $event->date }} </span>

                        {{-- bottone destroy --}}
                        @auth
                        @if(Auth :: user() -> id == $event -> user_id)
                        <form action="{{ route('event.destroy', $event->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete">
                        </form>

                        <div class="button_container">
                            <button class="ms_button">
                                <a href="{{ route('event.edit', $event->id) }}">MODIFICA EVENTO</a>
                            </button>
                        </div>
                        @endif
                        @endauth
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>
@endsection