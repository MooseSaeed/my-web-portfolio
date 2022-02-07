<template>
    <div class="relative">
        <button
            @click="showCategories"
            class="flex w-full py-2 pl-3 pr-9 text-sm font-semibold lg:inline-flex lg:w-32"
        >
            Categories
            <svg
                class="pointer-events-none absolute -rotate-90 transform"
                style="right: 12px"
                width="22"
                height="22"
                viewBox="0 0 22 22"
            >
                <g fill="none" fill-rule="evenodd">
                    <path
                        stroke="#000"
                        stroke-opacity=".012"
                        stroke-width=".5"
                        d="M21 1v20.16H.84V1z"
                    ></path>
                    <path
                        fill="#222"
                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"
                    ></path>
                </g>
            </svg>
        </button>
        <div
            v-show="categoryToggle"
            class="absolute z-50 mt-2 w-full overflow-scroll rounded-xl bg-blue-100 py-2"
        >
            <a href="#" class="block px-3 text-left text-sm">One</a>
            <a href="#" class="block px-3 text-left text-sm">Two</a>
            <a href="#" class="block px-3 text-left text-sm">Three</a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categoryToggle: false,
        };
    },
    methods: {
        showCategories() {
            this.categoryToggle = !this.categoryToggle;
        },
    },
};
</script>

<style></style>
