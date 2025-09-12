<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('home');

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

// Dashboard and Profile
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

// Gallery route
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Blog routes
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog/category/{category}', function ($category) {
    // In a real application, this would fetch posts by category
    return view('blog.category', compact('category'));
})->name('blog.category');

Route::get('/blog/post/{slug}', function ($slug) {
    // In a real application, this would fetch a specific post
    return view('blog.post', compact('slug'));
})->name('blog.post');

require __DIR__ . '/auth.php';
