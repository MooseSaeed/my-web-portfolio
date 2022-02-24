<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


//playing with Dev.to API

route::get('ping', function () {

    $response = Http::withHeaders([
        'api-key' => config('services.devto.key')
    ])->get('http://dev.to/api/articles/me/published');

    $response = json_decode($response, true);

    ddd($response);
});

/* Showing homepage and posts */

Route::get('/', [Postcontroller::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [Postcontroller::class, 'show']);

/* Adding Comments */

Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);

/* Subscribe to Newsletter */

Route::post('newsletter', NewsletterController::class);

/* Admin posts management */

Route::resource('admin/posts', AdminPostController::class, [
    'names' => [
        'index' => 'dashboard',
        'create' => 'newpost'
    ]
])->middleware(['auth'])->middleware('admin');

/* Admin category management */

Route::resource('admin/categories', AdminCategoryController::class, [
    'names' => [
        'index' => 'categories',
        'create' => 'newcategory'
    ]
])->middleware(['auth'])->middleware('admin');

require __DIR__ . '/auth.php';
