<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\ArticlesData;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class Postcontroller extends Controller
{
    public function articles()
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
                    Carbon::create($article['published_timestamp']),
                    $article['url'],
                    $article['cover_image'],
                    $article['canonical_url'],
                )
            );
        }

        return $articleCollection->sortBy('published_at');
    }
    public function index()
    {

        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            'articles' => $this->articles(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
