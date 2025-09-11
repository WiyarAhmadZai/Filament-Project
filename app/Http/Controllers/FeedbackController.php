<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create($validated);

        // Check if request is AJAX
        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', 'Thank you for your feedback! We will get back to you soon.');
    }
}
