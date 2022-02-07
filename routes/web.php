<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Postcontroller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Postcontroller::class, 'index'])->name('home');
route::get('posts/{post:slug}', [Postcontroller::class, 'show']);


route::get('list', [CategoryController::class, 'list']);

/*     return view('posts.index', [
        'posts' => $category->posts,
        'categories' => Category::all()
    ]); */

route::get('authors/{author:username}', function (User $author) {
    return view('posts.index', [
        'posts' => $author->posts,
        'authors' => User::all(),
        'categories' => Category::all(),
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
