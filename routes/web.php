<?php

use App\Livewire\About;
use App\Livewire\Home;
use App\Livewire\Posts\ShowPosts;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('/posts', ShowPosts::class)->name('posts.index');

Route::get('/about', About::class)->name('about');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
