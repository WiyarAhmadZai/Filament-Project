<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        // Get all users except the current user for the sidebar
        $users = User::where('id', '!=', Auth::id())->get();
        
        // Get messages for the current user (sent or received)
        $messages = Message::where('sender_id', Auth::id())
            ->orWhere('recipient_id', Auth::id())
            ->orWhere('is_broadcast', true)
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('messages.index', compact('users', 'messages'));
    }

    public function show(User $user)
    {
        // Get conversation between current user and selected user
        $conversation = Message::where(function ($query) use ($user) {
            $query->where('sender_id', Auth::id())
                  ->where('recipient_id', $user->id);
        })->orWhere(function ($query) use ($user) {
            $query->where('sender_id', $user->id)
                  ->where('recipient_id', Auth::id());
        })->orWhere('is_broadcast', true)
          ->orderBy('created_at', 'asc')
          ->get();

        // Mark messages as read
        Message::where('sender_id', $user->id)
            ->where('recipient_id', Auth::id())
            ->whereNull('read_at')
            ->update(['read_at' => now()]);

        $users = User::where('id', '!=', Auth::id())->get();

        return view('messages.show', compact('user', 'conversation', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'content' => 'required|string|max:1000',
        ]);

        Message::create([
            'sender_id' => Auth::id(),
            'recipient_id' => $request->recipient_id,
            'content' => $request->content,
        ]);

        return back()->with('success', 'Message sent successfully!');
    }

    public function broadcast(Request $request)
    {
        // Only admins can broadcast messages
        if (!Auth::user()->is_admin) {
            return back()->with('error', 'Unauthorized access!');
        }

        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        // Create a broadcast message for all users
        $users = User::all();
        foreach ($users as $user) {
            Message::create([
                'sender_id' => Auth::id(),
                'recipient_id' => $user->id,
                'content' => $request->content,
                'is_broadcast' => true,
            ]);
        }

        return back()->with('success', 'Broadcast message sent to all users!');
    }
}