<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;
use DB;

class EventsController extends Controller
{
    public function events()
    {
    	$events = $this->getEvents();

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

    public function update($id, Request $request)
    {
    	$event = Event::findOrFail($id);

        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;

        $event->save();

        $events = $this->getEvents();

        return response()->json($events);
      
    }

    public function destroy($id)
    {

    	$event = Event::findOrFail($id);

    	$event->delete();

    	$events = $this->getEvents();

    	return response()->json($events);
    }

    private function getEvents()
    {
    	$events = Event::latest()->get();

    	return $events;
    }
}
