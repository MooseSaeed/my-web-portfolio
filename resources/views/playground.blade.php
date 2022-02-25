<x-bloglayout>

    <?php
    
    $articles = Http::withHeaders([
        'api-key' => config('services.devto.key'),
    ])->get('http://dev.to/api/articles/me/published');
    
    $articles = json_decode($articles, true);
    
    ?>

    @foreach ($articles as $article)
        <h1 class="text-white text-xl">{{ $article['title'] }}</h1>
    @endforeach

</x-bloglayout>
