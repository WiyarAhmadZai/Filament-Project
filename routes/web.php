<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

// Public pages
Route::get('/places', function () {
    return view('places');
})->name('places');

Route::get('/places/historical', function () {
    return view('places.historical');
})->name('places.historical');

Route::get('/places/natural', function () {
    return view('places.natural');
})->name('places.natural');

Route::get('/places/cultural', function () {
    return view('places.cultural');
})->name('places.cultural');

Route::get('/guides', function () {
    return view('guides');
})->name('guides');

Route::get('/guides/certified', function () {
    return view('guides.certified');
})->name('guides.certified');

Route::get('/guides/local', function () {
    return view('guides.local');
})->name('guides.local');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/shop/clothing', function () {
    return view('shop.clothing');
})->name('shop.clothing');

Route::get('/shop/crafts', function () {
    return view('shop.crafts');
})->name('shop.crafts');

Route::get('/cars', function () {
    return view('cars');
})->name('cars');

Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');

Route::get('/tickets/visas', function () {
    return view('tickets.visas');
})->name('tickets.visas');

Route::get('/tickets/flights', function () {
    return view('tickets.flights');
})->name('tickets.flights');

Route::get('/community', function () {
    return view('community');
})->name('community');

Route::get('/community/posts', function () {
    return view('community.posts');
})->name('community.posts');

Route::get('/community/videos', function () {
    return view('community.videos');
})->name('community.videos');

Route::get('/community/members', function () {
    return view('community.members');
})->name('community.members');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Admin-only routes for testing
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/test', function () {
        return 'Admin-only area - You are an admin!';
    })->name('admin.test');

    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');
});

// User role routes for testing
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/profile', function () {
        return 'User profile area - Access granted for authenticated users';
    })->name('user.profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Community routes
    Route::get('/community/posts', [PostController::class, 'index'])->name('community.posts.index');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::post('/posts/{postId}/comments', [CommentController::class, 'storeForPost'])->name('comments.post.store');
    Route::post('/posts/{postId}/like', [LikeController::class, 'likePost'])->name('likes.post');

    // Video routes
    Route::get('/community/videos', [VideoController::class, 'index'])->name('community.videos.index');
    Route::get('/videos/{video}', [VideoController::class, 'show'])->name('videos.show');
    Route::post('/videos/{videoId}/comments', [CommentController::class, 'storeForVideo'])->name('comments.video.store');
    Route::post('/videos/{videoId}/like', [LikeController::class, 'likeVideo'])->name('likes.video');

    // Follow routes
    Route::post('/users/{userId}/follow', [FollowController::class, 'follow'])->name('users.follow');
    Route::post('/users/{userId}/unfollow', [FollowController::class, 'unfollow'])->name('users.unfollow');

    // Messaging routes
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{user}', [MessageController::class, 'show'])->name('messages.show');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    Route::post('/messages/broadcast', [MessageController::class, 'broadcast'])->name('messages.broadcast');

    // Additional authenticated routes
    Route::get('/bookings', function () {
        return view('bookings');
    })->name('bookings');

    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

    // User profile with posts
    Route::get('/user/{user}/posts', [PostController::class, 'userPosts'])->name('user.posts');
});

// Fix for the login route issue
Route::get('/login', function () {
    return redirect()->route('filament.wiyar.auth.login');
})->name('login');

require __DIR__ . '/auth.php';
