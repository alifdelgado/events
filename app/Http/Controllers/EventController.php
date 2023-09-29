<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('events.index');
    }

    public function create()
    {
        return view('events.create');
    }

    public function store()
    {

    }

    public function show(Event $event)
    {

    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {

    }

    public function destroy(Event $event)
    {

    }
}
