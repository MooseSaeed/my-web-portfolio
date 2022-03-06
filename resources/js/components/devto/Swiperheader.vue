<template>
    <header class="mt-4">
        <div class="mt-4">
            <slot />

            <span class="mt-4 block text-center text-xs text-gray-400">
                Published <time>{{ created_at }}</time>
            </span>
        </div>
    </header>
</template>

<script>
export default {
    name: "Swiperheader",
    props: ["created_at"],
};
</script>

<style></style>
