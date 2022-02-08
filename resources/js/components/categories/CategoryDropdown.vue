<template>
    <div class="relative" v-click-outside="onClickOutside">
        <button
            @click="showCategories"
            class="flex max-h-52 w-full overflow-auto py-2 pl-3 pr-9 text-sm font-semibold lg:inline-flex lg:w-32"
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
            class="absolute z-50 mt-1 w-full rounded-xl bg-blue-100 py-2"
        >
            <a
                :href="this.categoryRoute + category.slug"
                v-for="category in categories"
                :key="category.id"
                class="block py-1 px-3 text-left text-sm"
                >{{ category.name }}</a
            >
        </div>
    </div>
</template>

<script>
import vClickOutside from "click-outside-vue3";
export default {
    data() {
        return {
            categoryToggle: false,
            categories: [],
            categoryRoute: "/?category=",
        };
    },
    directives: {
        clickOutside: vClickOutside.directive,
    },
    methods: {
        showCategories() {
            this.categoryToggle = !this.categoryToggle;
        },
        getCategories() {
            axios.get("/list").then((response) => {
                this.categories = response.data.categories;
            });
        },
        onClickOutside() {
            this.categoryToggle = false;
        },
    },
    mounted() {
        this.getCategories();
    },
};
</script>

<style></style>
