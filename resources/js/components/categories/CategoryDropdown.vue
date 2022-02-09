<template>
    <div class="relative" v-click-outside="onClickOutside">
        <button
            @click="showCategories"
            class="flex max-h-52 w-full overflow-auto py-2 pl-3 pr-9 text-sm font-semibold lg:inline-flex lg:w-32"
        >
            Categories

            <svg
                class="absolute"
                :class="
                    categoryToggle
                        ? '-rotate-90 transform transition duration-500 ease-in-out'
                        : 'rotate-90 transform transition duration-500 ease-in-out'
                "
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
        <transition
            enter-active-class="transform transition duration-500 ease-custom"
            enter-class="-translate-y-1/2 scale-y-0 opacity-0"
            enter-to-class="translate-y-0 scale-y-100 opacity-100"
            leave-active-class="transform transition duration-300 ease-custom"
            leave-class="translate-y-0 scale-y-100 opacity-100"
            leave-to-class="-translate-y-1/2 scale-y-0 opacity-0"
        >
            <div
                v-show="categoryToggle"
                class="absolute left-0 right-0 z-50 mt-1 w-full rounded-xl bg-blue-100 py-2"
            >
                <a
                    :href="this.categoryRoute + category.slug"
                    v-for="category in categories"
                    :key="category.id"
                    class="block py-1 px-3 text-left text-sm transition-colors duration-300 hover:bg-gray-200"
                    >{{ category.name }}</a
                >
            </div>
        </transition>
    </div>
</template>

<script>
import vClickOutside from "click-outside-vue3";
import { ref, onMounted } from "vue";
export default {
    name: "home",
    directives: {
        clickOutside: vClickOutside.directive,
    },
    setup() {
        const categoryToggle = ref(false);

        const showCategories = () => {
            categoryToggle.value = !categoryToggle.value;
        };

        const onClickOutside = (event) => {
            categoryToggle.value = false;
        };

        const categories = ref([]);

        const getCategories = () => {
            axios.get("/list").then((response) => {
                categories.value = response.data.categories;
            });
        };

        onMounted(() => {
            getCategories();
        });

        const categoryRoute = ref("/?category=");

        return {
            categoryToggle,
            showCategories,
            onClickOutside,
            categories,
            getCategories,
            onMounted,
            categoryRoute,
        };
    },
};
</script>

<style>
.ease-custom {
    transition-timing-function: cubic-bezier(0.1, 0.7, 1, 0.1);
}
</style>
