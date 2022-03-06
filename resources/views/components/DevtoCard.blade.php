@props(['articles'])

<article
    class="post-card text-white dark:hover:bg-blue-50 dark:hover:bg-none dark:text-black transition-all duration-1000 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl px-10 py-15 mx-10 my-15">

    <h1 class="text-3xl font-bold text-center my-5">
        Latest Articles on Dev.to
    </h1>


    <Swiperslides>

        @foreach ($articles as $article)
            <Swiperslidescontent>


                <div>
                    <Swiperimg src="{{ $article->thumbnail }}" />
                </div>

                <div>
                    <Swiperheader created_at="{{ $article->created_at->toDateString() }}">
                        <Swipertitle target="_blank" title="{{ $article->title }}" href="{{ $article->url }}" />
                    </Swiperheader>
                </div>

                <div>
                    <Swiperfooter>
                        <Swiperbutton target="_blank" href="{{ $article->url }}" />
                    </Swiperfooter>
                </div>


            </Swiperslidescontent>
        @endforeach

    </Swiperslides>


</article>
