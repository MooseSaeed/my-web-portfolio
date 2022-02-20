<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\support\Str;

class AdminPostController extends Controller
{

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $attributes = $request->validated();
        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = Str::slug($attributes['title']);
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/')->with('success', 'Your post has been published successfully');
    }

    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()->paginate(50)
        ]);
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $attributes = $request->validated();
        $attributes['slug'] = Str::slug($attributes['title']);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Post updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post DELETED');
    }
}
