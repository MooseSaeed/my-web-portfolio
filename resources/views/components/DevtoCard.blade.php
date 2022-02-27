@props(['articles'])

<article
    class="post-card text-white dark:hover:bg-blue-50 dark:hover:bg-none dark:text-black transition-all duration-1000 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl px-10 py-15 mx-10 my-15">

    <h1 class="text-3xl font-bold text-center mt-5">
        Latest Articles on Dev.to
    </h1>


    <Swiperslides>
        @foreach ($articles as $article)
            <Swiperslidescontent thumbnail="{{ $article->thumbnail }}" canonical_url="{{ $article->canonical_url }}"
                title="{{ $article->title }}" created_at="{{ $article->created_at }}"
                excerpt="{{ $article->excerpt }}">
            </Swiperslidescontent>
        @endforeach

    </Swiperslides>

</article>
