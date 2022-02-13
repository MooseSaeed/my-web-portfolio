<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public static function store(Post $post)
    {

        request()->validate([
            'body' => 'required',
            'name' => 'required',
            'email' => 'required'
        ]);

        $post->comments()->create([
            'body' => request('body'),
            'name' => request('name'),
            'email' => request('email')
        ]);

        return back();
    }
}
