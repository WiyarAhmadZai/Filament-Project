<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Redirect the login route to Filament's login page
Route::get('/login', function () {
    return redirect()->route('filament.wiyar.auth.login');
})->name('login');
