<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function storeForPost(Request $request, $postId)
    {
        // Find the post manually
        $post = Post::findOrFail($postId);
        
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = new Comment();
        $comment->content = $request->content;
        $comment->user_id = Auth::id();
        $comment->post_id = $post->id;
        $comment->save();

        // Update comments count
        $post->increment('comments_count');

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    public function storeForVideo(Request $request, $videoId)
    {
        // Find the video manually
        $video = Video::findOrFail($videoId);
        
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = new Comment();
        $comment->content = $request->content;
        $comment->user_id = Auth::id();
        $comment->video_id = $video->id;
        $comment->save();

        // Update comments count
        $video->increment('comments_count');

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}