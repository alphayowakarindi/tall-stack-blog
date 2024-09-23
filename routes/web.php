<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/', Counter::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
