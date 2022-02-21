@props(['comment'])

<article class="flex bg-blue-50/30 p-6 rounded-xl border border-blue-100 space-x-4">

    <div class="flex-shrink-0 ">
        <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" width="60" height="60" class="rounded-xl" alt="">
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

    </div>

</article>