<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelss\Event;
class EventController extends Controller
{
    public function index() {

        return view('welcome');
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
