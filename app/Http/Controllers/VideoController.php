<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $query = Video::with('user');
        
        if ($request->has('category') && $request->category != 'all') {
            $query->where('category', $request->category);
        }
        
        if ($request->has('search') && $request->search) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }
        
        $videos = $query->orderBy('created_at', 'desc')->paginate(12);
        
        return view('community.videos', compact('videos'));
    }

    public function show(Video $video)
    {
        $video->increment('views');
        $video->load('user', 'comments.user', 'likes');
        return view('videos.show', compact('video'));
    }

    public function comment(Request $request, Video $video)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = new Comment($request->all());
        $comment->user_id = Auth::id();
        $comment->video_id = $video->id;
        $comment->save();

        // Update comments count
        $video->increment('comments_count');

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    public function like(Video $video)
    {
        $user = Auth::user();
        
        // Check if user already liked the video
        $existingLike = Like::where('user_id', $user->id)
            ->where('video_id', $video->id)
            ->first();

        if ($existingLike) {
            // Unlike
            $existingLike->delete();
            $video->decrement('likes_count');
            $liked = false;
        } else {
            // Like
            $like = new Like();
            $like->user_id = $user->id;
            $like->video_id = $video->id;
            $like->save();
            $video->increment('likes_count');
            $liked = true;
        }

        if (request()->wantsJson()) {
            return response()->json([
                'liked' => $liked,
                'likes_count' => $video->likes_count
            ]);
        }

        return redirect()->back();
    }
}