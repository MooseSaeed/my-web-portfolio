<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::latest()->get(),
            'categories' => Category::all()
        ]);
    }
}
