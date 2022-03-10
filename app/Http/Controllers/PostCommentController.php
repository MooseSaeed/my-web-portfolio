<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public static function store(Post $post)
    {
        request()->validate([
            'body' => 'required|min:10|max:200',
            'name' => 'required',
            'email' => 'required',
        ]);

        $post->comments()->create([
            'body' => request('body'),
            'name' => request('name'),
            'email' => request('email'),
        ]);

        return back()->with('success', 'Your comment has been posted to the world');
    }

    public static function destroy(Comment $comment)
    {
        $comment->delete();

        return back()->with('success', 'Comment Deleted!');
    }
}
