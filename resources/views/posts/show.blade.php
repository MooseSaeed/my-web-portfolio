<x-bloglayout>

    <section class="px-6 pb-8">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl" />

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Post Pic" />
                        <div class="ml-3 text-left"></div>
                    </div>
                </div>

                <div class="col-span-8 text-white dark:text-black">

                    <div class="flex justify-between mb-6">
                        <a href="/"
                            class="relative inline-flex items-center text-lg text-transparent bg-clip-text demogard transition duration-300 font-semibold 
                bg-gradient-to-r from-purple-600 to-blue-500
                hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">

                            < Back to Posts </a>

                                <div class="space-x-2">
                                    <a href="/?category={{ $post->category->slug }}"
                                        class="px-3 py-1 border border-violet-400 rounded-full text-violet-400 text-xs uppercase font-semibold"
                                        style="font-size: 10px">{{ $post->category->name }}</a>
                                </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{ $post->title }}
                    </h1>

                    <div class="prose prose-white dark:prose-black space-y-4 lg:text-lg leading-loose">
                        {!! $post->body !!}
                    </div>
                </div>

                <section class="col-span-8 col-start-5 mt-10 space-y-6">

                    @include('posts._add-comments-form')

                    @foreach ($post->comments as $comment)
                        <x-post-comment :comment="$comment" />
                    @endforeach
                </section>

            </article>
        </main>

</x-bloglayout>
