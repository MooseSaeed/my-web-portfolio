@props(['post'])

<div data-aos-duration="400" data-aos="fade-up">
    <card class="rounded-xl">
        <article
            class="post-card text-white dark:hover:bg-blue-50 dark:hover:bg-none dark:text-black transition-all duration-1000 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5 lg:flex">
                <div class="flex-1 lg:mr-8 self-center">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration"
                        class="rounded-xl object-cover" />
                </div>

                <div class="flex-1 flex flex-col justify-between">
                    <header class="mt-8 lg:mt-0">

                        <div class="mt-4 card-info">
                            <a href="/posts/{{ $post->slug }}">
                                <h1 class="text-3xl font-bold">
                                    {{ $post->title }}
                                </h1>
                            </a>

                            <div class="mt-4 text-gray-400 text-xs flex items-center">
                                <div>Published {{ $post->created_at->diffForHumans() }} in</div>
                                <a href="/?category={{ $post->category->slug }}"
                                    class="ml-1 px-3 sm:px-6 py-1 border border-violet-400 rounded-full text-violet-400 text-sm uppercase font-bold"
                                    style="font-size: 10px">{{ $post->category->name }}</a>
                            </div>
                        </div>
                    </header>

                    <div class="card-info text-sm mt-4">
                        <p>
                            {!! $post->excerpt !!}
                        </p>
                    </div>

                    <footer class="flex flex-col sm:flex-row justify-between items-center mt-8">
                        <div></div>


                        <a href=" /posts/{{ $post->slug }}"
                            class="mt-5 demogard transition duration-300 font-semibold
                    bg-gradient-to-r from-purple-600 to-blue-500
                    hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800
                     text-white rounded-full py-2 px-8 text-xs">
                            Read More
                        </a>

                    </footer>
                </div>
            </div>
        </article>
    </card>
</div>
