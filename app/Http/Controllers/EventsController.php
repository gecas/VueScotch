<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;

class EventsController extends Controller
{
    public function events()
    {
    	$events = Event::latest()->get();

	    return response()->json($events);
    }

    public function postEvents(Request $request)
    {
    	//$events = Event::create([$request->all()]);

    	$event = new Event;

        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;

        $event->save();

        return response()->json($event);
    }
}
