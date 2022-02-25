<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Postcontroller extends Controller
{
    public function index()
    {

        $articles = Http::withHeaders([
            'api-key' => config('services.devto.key'),
        ])->get('http://dev.to/api/articles/me/published');

        $articles = json_decode($articles, true);

        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            'articles' => $articles
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
