<x-bloglayout>

    @include('__header')

    @if ($posts->count())

        <x-featuredCard :post="$posts[0]" />

        @if ($posts->count() > 1)

            <div class="lg:grid lg:grid-cols-2">

                <x-postCard :post="$posts[1]" />
                <x-postCard :post="$posts[2]" />

            </div>

            <div class="lg:grid lg:grid-cols-3">
                @foreach ($posts->skip(3) as $post)
                    <x-postCard :post="$post" />
                @endforeach
            </div>

        @endif

    @else
        <p>No posts yet, please check back later.</p>
    @endif



</x-bloglayout>
