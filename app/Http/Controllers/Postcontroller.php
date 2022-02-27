<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\ArticlesData;
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

        $articleCollection = collect();

        foreach ($articles as $article) {
            $articleCollection->push(
                new ArticlesData(
                    $article['id'],
                    $article['title'],
                    $article['description'],
                    $article['published_timestamp'],
                    $article['url'],
                    $article['cover_image'],
                    $article['canonical_url'],
                )
            );
        }

        /*         foreach (Post::all() as $post) {
            $articleCollection->push(
                new ArticlesData(
                    $post->id,
                    $post->user_id,
                    $post->category_id,
                    $post->title,
                    $post->excerpt,
                    $post->created_at,
                    $post->slug,
                    '',
                    '',
                    '',
                    $post->body,
                    $post->thumbnail,
                    '',
                    '',
                )
            );
        } */

        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            'articles' => $articleCollection->sortBy('published_at'),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
