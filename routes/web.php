<?php

use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', [Postcontroller::class, 'index'])->name('home');

// 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

Route::get('posts/{post:slug}', [Postcontroller::class, 'show']);

Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
