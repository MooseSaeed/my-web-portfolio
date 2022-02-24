<template>
    <div
        class="flex cursor-pointer items-center justify-between"
        @click="store.modeToggle(), modeToggle()"
    >
        <div
            class="flex h-4 w-12 items-center rounded-full bg-gray-300 p-1 duration-300 ease-in-out"
            :class="{ 'bg-green-400': store.toggleActive }"
        >
            <div
                class="h-3 w-3 transform rounded-full bg-white shadow-md duration-300 ease-in-out"
                :class="{ 'translate-x-7': store.toggleActive }"
            ></div>
        </div>
    </div>
</template>

<script>
import { store } from "./store.js";
export default {
    props: ["theme"],
    data() {
        return {
            store,
        };
    },
    mounted() {
        if (this.theme === "false") {
            store.light();
        } else {
            store.dark();
        }
    },
    methods: {
        dark() {
            this.$emit("dark");
        },
        light() {
            this.$emit("light");
        },

        modeToggle() {
            if (
                this.darkMode ||
                document.querySelector("body").classList.contains("dark")
            ) {
                this.light();
            } else {
                this.dark();
            }
            const isDarkModeOn = store.toggleActive;
            createCookie("isDarkModeOn", isDarkModeOn.toString(), 60 * 60 * 24);
        },
    },
};
</script>

<style></style>
