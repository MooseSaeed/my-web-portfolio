@props(['post'])

<card class="rounded-xl">
    <article
        class="transition-colors duration-300 hover:bg-blue-50 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
        <div class="py-6 px-5 lg:flex">
            <div class="flex-1 lg:mr-8">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration"
                    class="rounded-xl object-cover" />
            </div>

            <div class="flex-1 flex flex-col justify-between">
                <header class="mt-8 lg:mt-0">
                    <div class="space-x-2">
                        <a href="/?category={{ $post->category->slug }}"
                            class="px-3 py-1 border border-violet-500 rounded-full 
                    text-violet-500 text-xs uppercase font-semibold"
                            style="font-size: 10px">{{ $post->category->name }}</a>
                    </div>

                    <div class="mt-4 card-info">
                        <a href="/posts/{{ $post->slug }}">
                            <h1 class="text-3xl">
                                {{ $post->title }}
                            </h1>
                        </a>

                        <span class="mt-2 block text-gray-400 text-xs">
                            Published <time>{{ $post->created_at->diffForHumans() }}</time>
                        </span>
                    </div>
                </header>

                <div class="card-info text-sm mt-2">
                    <p>
                        {!! $post->excerpt !!}
                    </p>
                </div>

                <footer class="flex flex-col sm:flex-row justify-between items-center mt-8">
                    <div class="flex items-center text-sm">
                        <a href="/?author={{ $post->author->username }}">
                            <img src="/images/My Logo Avatar.png" alt="Logo avatar" />
                        </a>
                        <div class="ml-3">
                            <a href="/?author={{ $post->author->username }}">
                                <h5 class="font-bold">{{ $post->author->name }}</h5>
                            </a>
                        </div>
                    </div>

                    <div class="">
                        <a href="/posts/{{ $post->slug }}"
                            class="demogard transition duration-300 font-semibold 
                bg-gradient-to-r from-purple-600 to-blue-500
                hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800
                 text-white rounded-full py-2 px-8 text-xs">Read
                            More</a>
                    </div>
                </footer>
            </div>
        </div>
    </article>
</card>
