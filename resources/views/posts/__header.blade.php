<header class="max-w-xl mx-auto mt-10 text-center ">

    <section class="flex justify-center items-center">
        <Bloglogo></Bloglogo>
    </section>

    <h2 data-aos="fade-up" data-aos-delay="100" data-aos-duration="400" class="dark:text-black text-white inline-flex mt-3 items-center">
        By Mostafa Said
        <img class="wavingHand z-0" src="/images/wavinghand.png" width="35px" alt="Waving Hand" />
    </h2>

    <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="400" class="text-sm mt-3 text-white dark:text-black">
        Here you will find articles and tutorials about web developement
        that will surely help you become a better developer.
    </p>

    <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="400" class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">

        <!--  Category -->
        <div class="override relative lg:inline-flex items-center rounded-xl bg-blue-100">

            <x-category-dropdown />

        </div>

        <!-- Search -->

        <div class="override relative lg:inline-flex items-center rounded-xl bg-blue-100">
            <form method="GET" action="#">
                <div class="flex justify-between items-center text-center">
                    @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <input type="text" name="search" placeholder="Looking for something?" value="{{ request('search') }}" class="shadow-none w-full focus:shadow-none bg-transparent placeholder-black text-sm border-none outline-hidden" />
                    <button type="submit" class="transition-colors duration-300 bg-gradient-to-r hover:to-blue-900 hover:from-blue-500  from-blue-400 to-blue-800 text-white m-1 rounded-xl text-xs font-semibold uppercase py-2 px-6">
                        Search
                    </button>

                </div>
            </form>
        </div>

    </div>
</header>