@props(['comment'])

<article class="flex text-white dark:text-black dark:bg-blue-50/30 p-6 rounded-xl border border-blue-100 space-x-4">

    <div class="flex-shrink-0 ">
        <img src="/images/avatar.png" class="rounded-full" alt="User avatar">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->name }}</h3>
            <p class="text-xs">Posted
                <time>{{ $comment->created_at->format('F j, y, g:i a') }}</time>
            </p>
        </header>

        <p>
            {{ $comment->body }}
        </p>

        @auth

            <form action="/posts/{{ $comment->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:text-red-600">DELETE</button>
            </form>

        @endauth

    </div>

</article>
