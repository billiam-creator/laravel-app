<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // <-- IMPORTANT: We will create this 'Event' model

class EventsController extends Controller
{
    /**
     * Display a listing of the events.
     */
    public function index()
    {
        // 1. Fetch all events from the database
        // This assumes you will have an 'events' table and an 'Event' model.
        $events = Event::all();

        // 2. Return the 'events' view and pass the $events data to it.
        // The 'compact' helper creates an associative array like ['events' => $events].
        return view('events', compact('events'));

        // Removed the problematic `return (`events`, compact('events'));`
        // Removed the redundant `return view('events');`
    }
}
