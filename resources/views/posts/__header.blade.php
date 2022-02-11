<header class="max-w-xl mx-auto mt-10 text-center">
    <h1 class="text-4xl">
        <span class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 px-2 py-1 rounded-xl text-white">
            Hands On Tech</span>
        blog
    </h1>

    <h2 class="inline-flex mt-2 items-center">
        By Mostafa Said
        <img class="wavingHand" src="/images/wavinghand.png" width="35px" alt="Waving Hand" />
    </h2>

    <p class="text-sm mt-5">
        Come'on in and check out my latest blog posts. I'm sharing whatever on
        my mind and my mind is full of useful stuff for you'all.
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <div
            class="override relative lg:inline-flex items-center bg-gradient-to-br from-green-200 to-blue-300 rounded-xl">

            <x-category-dropdown />

        </div>

        <!-- Search -->
        <div
            class="override flex lg:inline-flex items-center bg-gradient-to-br from-green-200 to-blue-300 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="text" name="search" placeholder="Looking for something?" value="{{ request('search') }}"
                    class="shadow-none focus:shadow-none bg-transparent placeholder-black text-sm border-none outline-hidden" />
            </form>
        </div>
    </div>
</header>
