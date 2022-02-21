<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Postcontroller::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [Postcontroller::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

Route::resource('admin/posts', AdminPostController::class, [
    'names' => [
        'index' => 'dashboard',
        'create' => 'newpost'
    ]
])->middleware(['auth'])->middleware('admin');

require __DIR__ . '/auth.php';
