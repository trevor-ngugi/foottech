<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
        $event = new event();
        $event->title = $request->title;
        $event->body = $request->body;
        $event->image = $request->file('image'); 
        $event->published_at = $request->published_at;

        $event->save();
        return redirect('/Event')->with('success','Post created successfully!');
        return Redirect::back()->withErrors(['msg' => 'The Message']);
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Event $event, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
        $event->title = $request->title;
        $event->body = $request->body;
        $event->image = $request->file('image');
        $event->published_at = $request->published_at;

        $event->save();
        return redirect('/Event')->with('success','Post updated successfully!');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/Event')->with('success','Post deleted successfully!');
    }
}
