<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'comments', 'likes')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('community.posts', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_url' => 'nullable|url',
            'video_url' => 'nullable|url',
        ]);

        $post = new Post($request->all());
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->back()->with('success', 'Post created successfully!');
    }

    public function show(Post $post)
    {
        $post->load('user', 'comments.user', 'likes');
        return view('posts.show', compact('post'));
    }

    public function comment(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = new Comment($request->all());
        $comment->user_id = Auth::id();
        $comment->post_id = $post->id;
        $comment->save();

        // Update comments count
        $post->increment('comments_count');

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    public function like(Post $post)
    {
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

    public function userPosts($userId)
    {
        $user = \App\Models\User::findOrFail($userId);
        $posts = Post::where('user_id', $userId)
            ->with('user', 'comments', 'likes')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('community.posts', compact('posts', 'user'));
    }
}
