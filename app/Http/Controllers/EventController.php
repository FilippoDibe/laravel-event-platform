<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;
use App\Models\Tag;


class EventController extends Controller
{
    public function index() {
        $user = User :: all();
        $events = Event::all();
        return view('welcome', compact('events'));
    }

    public function edit($id)
    {
        $event = Event :: find($id);

        return view('edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event :: find($id);

        $data = $request -> all();

        $event -> title = $data['title'];
        $event -> description = $data['description'];
        $event -> date = $data['date'];

        $event -> save();

        return redirect() -> route('event.show', $event -> id);
    }

    public function create() {

        $users = User :: all();

        return view('create', compact('users'));

    }

    public function store(Request $request) {

        $data = $request -> all();

        // recupero l'utente che ha effettuato il login
        $user = auth() -> user();

        $event = new Event();

        $event -> title = $data['title'];
        $event -> description = $data['description'];
        $event -> date = $data['date'];

        // associo l'user loggato all'evento creato
        $event -> user() -> associate($user);

        $event -> save();

        return redirect() -> route('event.index', $event -> id);

        // return redirect() -> route('event.show', $event -> id);
    }
    public function show($id)
    {
        $event = Event :: find($id);

        return view('show', compact('event'));
    }
    public function destroy($id)
    {
        $event=Event::find($id);
        $event->delete();
        return redirect()-> route('event.index');

    }


}
