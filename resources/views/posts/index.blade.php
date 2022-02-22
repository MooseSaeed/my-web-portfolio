<x-bloglayout>

    @include('posts.__header')

    @if ($posts->count())
        @if ($posts->currentPage() == 1)
            <x-featuredCard :post="$posts[0]" />
        @endif
        @if ($posts->count() > 1)

            @if ($posts->currentPage() == 1)
                <div class="lg:grid lg:grid-cols-2">

                    <x-postCard :post="$posts[1]" />
                    <x-postCard :post="$posts[2]" />

                </div>
            @endif

            <div class="lg:grid lg:grid-cols-3">
                @foreach ($posts->skip($posts->currentPage() == 1 ? 3 : 0) as $post)
                    <x-postCard :post="$post" />
                @endforeach
            </div>

        @endif

        {{ $posts->links() }}

    @else
        <p class="text-center">No posts matches your search, please check back later</p>
    @endif

</x-bloglayout>
