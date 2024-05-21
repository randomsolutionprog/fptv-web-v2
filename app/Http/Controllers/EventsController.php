<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class EventsController extends Controller
{
    //index page
    public function index(){
        return view('auth.events');
    }
    // Store event information
    public function store(Request $request)
    {
        // Validate if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to create an event.');
        }

        // Validate the request input
        $request->validate([
            'ev_name' => 'required|string|max:255',
            'ev_desc' => 'nullable|string',
            'ev_start_date' => 'required|date',
            'ev_end_register_date' => 'required|date|after_or_equal:ev_start_date',
            'publish' => 'required|boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
            $imagePath = $request->image->storeAs('assets/event_images', $imageName, 'public');
        }

        // Create the event
        Event::create([
            'user_id' => Auth::user()->id,
            'ev_name' => $request->ev_name,
            'ev_desc' => $request->ev_desc,
            'ev_start_date' => $request->ev_start_date,
            'ev_end_register_date' => $request->ev_end_register_date,
            'publish' => $request->publish,
            'image_path' => $imagePath,
        ]);

        // Redirect back with a success message
        return redirect()->route('events')->with('success', 'Event created successfully.');
    }
}
