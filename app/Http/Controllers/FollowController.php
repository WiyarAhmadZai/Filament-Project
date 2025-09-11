<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function follow($userId)
    {
        // Find the user to follow
        $user = User::findOrFail($userId);
        
        $authUser = Auth::user();
        
        // Prevent users from following themselves
        if ($authUser->id === $user->id) {
            return redirect()->back()->with('error', 'You cannot follow yourself.');
        }
        
        // Check if already following
        $existingFollow = Follower::where('follower_id', $authUser->id)
            ->where('following_id', $user->id)
            ->first();
            
        if (!$existingFollow) {
            $follow = new Follower();
            $follow->follower_id = $authUser->id;
            $follow->following_id = $user->id;
            $follow->save();
        }
        
        return redirect()->back()->with('success', 'You are now following ' . $user->name);
    }
    
    public function unfollow($userId)
    {
        // Find the user to unfollow
        $user = User::findOrFail($userId);
        
        $authUser = Auth::user();
        
        $follow = Follower::where('follower_id', $authUser->id)
            ->where('following_id', $user->id)
            ->first();
            
        if ($follow) {
            $follow->delete();
        }
        
        return redirect()->back()->with('success', 'You have unfollowed ' . $user->name);
    }
}