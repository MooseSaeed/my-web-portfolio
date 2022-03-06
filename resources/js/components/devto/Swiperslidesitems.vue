<template>
    <div>
        <slot />
    </div>

    <header class="mt-4">
        <div class="mt-4">
            <a href="">
                <h1 class="text-center text-lg font-semibold">{{ title }}</h1>
            </a>

            <span class="mt-4 block text-center text-xs text-gray-400">
                Published <time>{{ created_at }}</time>
            </span>
        </div>
    </header>

    <footer class="mt-8 flex flex-col items-center justify-between">
        <div></div>

        <a
            href="/"
            class="demogard rounded-full bg-gradient-to-r from-purple-600 to-blue-500 py-2 px-8 text-xs font-semibold text-white transition duration-300 hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800"
            >Read More
        </a>
    </footer>
</template>

<script>
export default {
    name: "Swiperslideitems",
    props: ["title", "created_at", "thumbnail"],
};
</script>

<style></style>
