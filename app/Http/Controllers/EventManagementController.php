<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventManagementController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('dashboard.admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('dashboard.admin.event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'content' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/event'), $fileName);
            $data['picture'] = 'images/event/' . $fileName;
        }

        Event::create($data);
        return redirect()->route('dashboard.admin.event.index')->with('success', 'Event record created successfully.');
    }

    public function show(Event $event)
    {
        return view('dashboard.admin.event.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return response()->json($event);
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'content' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('picture')) {
            // Delete old picture
            if ($event->picture && file_exists(public_path($event->picture))) {
                unlink(public_path($event->picture));
            }

            $file = $request->file('picture');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/event'), $fileName);
            $data['picture'] = 'images/event/' . $fileName;
        }

        $event->update($data);
        return redirect()->route('dashboard.admin.event.index')->with('success', 'Event record updated successfully.');
    }

    public function destroy(Event $event)
    {
        // Delete picture
        if ($event->picture && file_exists(public_path($event->picture))) {
            unlink(public_path($event->picture));
        }

        $event->delete();
        return response()->json(['success' => 'Event deleted successfully']);
    }
}
