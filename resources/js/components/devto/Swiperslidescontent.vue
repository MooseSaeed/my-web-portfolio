<template>
    <div class="swiper-slide">
        <article
            class="flex flex-col justify-between rounded-xl border border-black border-opacity-0 py-6 px-5 text-white transition-colors duration-300 hover:border-opacity-5 dark:text-black dark:hover:bg-blue-50 dark:hover:bg-none"
        >
            <div>
                <img src="{{ excerpt }}" class="rounded-xl" />
            </div>

            <header class="mt-4">
                <div class="mt-4">
                    <a href="{{ canonical_url }}">
                        <h1 class="text-3xl font-bold">{{ title }}</h1>
                    </a>

                    <span class="mt-4 block text-xs text-gray-400">
                        Published <time>{{ created_at }}</time>
                    </span>
                </div>
            </header>

            <div class="mt-8 text-sm">
                <p>
                    {{ excerpt }}
                </p>
            </div>

            <footer
                class="mt-8 flex flex-col items-center justify-between sm:flex-row lg:flex-col xl:flex-row"
            >
                <div></div>

                <a
                    href="/"
                    class="demogard rounded-full bg-gradient-to-r from-purple-600 to-blue-500 py-2 px-8 text-xs font-semibold text-white transition duration-300 hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800"
                    >Read More
                </a>
            </footer>
        </article>
    </div>
</template>

<script>
export default {
    props: ["title", "excerpt", "created_at", "canonical_url", "thumbnail"],
};
</script>

<style></style>
