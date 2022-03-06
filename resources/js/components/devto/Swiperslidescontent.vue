<template>
    <article
        class="swiper-slide flex flex-col justify-between rounded-xl border border-black border-opacity-0 py-6 px-12 text-white transition-colors duration-300 hover:border-opacity-5 dark:text-black dark:hover:bg-blue-50 dark:hover:bg-none"
    >
        <slot />
    </article>
</template>

<script>
export default {
    name: "Swiperslidescontent",
};
</script>

<style></style>
