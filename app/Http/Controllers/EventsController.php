<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;

class EventsController extends Controller
{
    public function events()
    {
    	$events = Event::all();

	    return response()->json($events);
    }
}
