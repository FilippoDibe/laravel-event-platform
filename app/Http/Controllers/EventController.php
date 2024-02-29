<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function index() {

        return view('welcome');
    }

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
        $event = Comic :: find($id);

        return view('show', compact('event'));
    }
    public function destroy($id)
    {
        $event=Comic::find($id);
        $event->delete();
        return redirect()-> route('event.index');
        // manca rotta
    }


}
