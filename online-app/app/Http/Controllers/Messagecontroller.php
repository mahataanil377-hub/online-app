<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Message List
    public function index()
    {
        $messages = Message::latest()->get();

        return view('messages.index', compact('messages'));
    }

    // Store Contact Message
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:20',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->route('contact.index')
            ->with('success', 'Message Sent Successfully.');
    }

    // Show Message
    public function show($id)
    {
        $message = Message::findOrFail($id);

        return view('messages.show', compact('message'));
    }

    // Delete Message
    public function destroy($id)
    {
        Message::findOrFail($id)->delete();

        return redirect()->route('messages.index')
            ->with('success', 'Message Deleted Successfully.');
    }
}