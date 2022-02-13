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
                        <img src="/images/pic sample.jpg" alt="Post Pic" />
                        <div class="ml-3 text-left"></div>
                    </div>
                </div>

                <div class="col-span-8">

                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                            class="relative inline-flex items-center text-lg text-transparent bg-clip-text demogard transition duration-300 font-semibold 
                bg-gradient-to-r from-purple-600 to-blue-500
                hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">

                            < Back to Posts </a>

                                <div class="space-x-2">
                                    <a href="/categories/{{ $post->category->slug }}"
                                        class="px-3 py-1 border border-violet-400 rounded-full text-violet-400 text-xs uppercase font-semibold"
                                        style="font-size: 10px">{{ $post->category->name }}</a>
                                </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{ $post->title }}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        {{ $post->body }}
                    </div>
                </div>

                <section class="col-span-8 col-start-5 mt-10 space-y-6">

                    <form method="POST" action="#" class="border border-gray-200 p-6 rounded-xl">
                        @csrf

                        <header class="flex items-center">
                            <img src="https://i.pravatar.cc/40" width="40" height="40" class="rounded-full" alt="">
                            <h2 class="ml-4">Want to participate?</h2>
                        </header>

                        <div class="mt-6">
                            <textarea name="body"
                                class="w-full text-sm focus:outline-none outline-none border-none focus:ring" rows="5"
                                placeholder="Think of something to say"></textarea>
                        </div>

                        <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                            <button type="submit"
                                class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-xl hover:bg-blue-600 ">Post</button>
                        </div>

                    </form>


                    @foreach ($post->comments as $comment)
                        <x-post-comment :comment="$comment" />
                    @endforeach
                </section>

            </article>
        </main>

</x-bloglayout>
