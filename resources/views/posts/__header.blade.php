<header class="max-w-xl mx-auto mt-10 text-center ">

    <h1 class="sm:text-4xl text-2xl text-white dark:text-black">
        <span class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 px-2 py-1 rounded-xl text-white ">
            Code is Puppet</span>
        blog
    </h1>

    <h2 class="dark:text-black text-white inline-flex mt-3 items-center">
        By Mostafa Said
        <img class="wavingHand" src="/images/wavinghand.png" width="35px" alt="Waving Hand" />
    </h2>

    <p class="text-sm mt-5 text-white dark:text-black">
        I like to consider code as puppets and we're the puppeteers, so join me
        and learn how to make your code do exactly what you want.
    </p>



    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">

        <!--  Category -->
        <div class="override relative lg:inline-flex items-center rounded-xl bg-blue-100">

            <x-category-dropdown />

        </div>

        <!-- Search -->

        <div class="override relative lg:inline-flex items-center rounded-xl bg-blue-100">
            <form method="GET" action="#" class="">
                <div class="flex justify-between items-center text-center">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <input type="text" name="search" placeholder="Looking for something?"
                        value="{{ request('search') }}"
                        class="shadow-none w-full focus:shadow-none bg-transparent placeholder-black text-sm border-none outline-hidden" />
                    <button type="submit"
                        class="transition-colors duration-300 bg-gradient-to-r hover:to-blue-900 hover:from-blue-500  from-blue-400 to-blue-800 text-white m-1 rounded-xl text-xs font-semibold uppercase py-2 px-6">
                        Search
                    </button>

                </div>
            </form>
        </div>

    </div>
</header>
