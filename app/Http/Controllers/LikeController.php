<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function likePost($postId)
    {
        // Find the post manually
        $post = Post::findOrFail($postId);
        
        $user = Auth::user();
        
        // Check if user already liked the post
        $existingLike = Like::where('user_id', $user->id)
            ->where('post_id', $post->id)
            ->first();

        if ($existingLike) {
            // Unlike
            $existingLike->delete();
            $post->decrement('likes_count');
            $liked = false;
        } else {
            // Like
            $like = new Like();
            $like->user_id = $user->id;
            $like->post_id = $post->id;
            $like->save();
            $post->increment('likes_count');
            $liked = true;
        }

        if (request()->wantsJson()) {
            return response()->json([
                'liked' => $liked,
                'likes_count' => $post->likes_count
            ]);
        }

        return redirect()->back();
    }

    public function likeVideo($videoId)
    {
        // Find the video manually
        $video = Video::findOrFail($videoId);
        
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