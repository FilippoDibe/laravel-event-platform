<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {

        return view('welcome');
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
}
