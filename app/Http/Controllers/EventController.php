<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('welcome', compact('events'));
    }

    public function edit($id)
    {
        $event = Event :: find($id);

        return view('edit', compact('event'));
    }

    // public function update($request, $id)
    // {
    //     $event = Event :: find($id);

    //     $data = $request -> all();

    //     $event -> title = $data['title'];
    //     $event -> description = $data['description'];
    //     $event -> date = $data['date'];

    //     $event -> save();

    //     return redirect() -> route('event.show', $event -> id);
    // }

    public function create() {

        return view('create');
    }

    public function store(Request $request) {

        $data = $request -> all();

        $event = new Event();

        $event -> title = $data['title'];
        $event -> description = $data['description'];
        $event -> date = $data['date'];

        $event -> save();

        return redirect() -> route('event.index');

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
