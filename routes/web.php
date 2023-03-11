<?php

use App\Http\Livewire\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/post-create', Post::class)
    ->middleware('auth')
    ->name('post-create');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
