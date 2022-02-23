<template>
    <div
        class="flex cursor-pointer items-center justify-between"
        @click="modeToggle"
    >
        <div
            class="flex h-4 w-12 items-center rounded-full bg-gray-300 p-1 duration-300 ease-in-out"
            :class="{ 'bg-green-400': toggleActive }"
        >
            <div
                class="h-3 w-3 transform rounded-full bg-white shadow-md duration-300 ease-in-out"
                :class="{ 'translate-x-7': toggleActive }"
            ></div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["theme"],
    data() {
        return {
            toggleActive: false,
        };
    },
    mounted() {
        if (this.theme === "false") {
            this.light();
        } else {
            this.dark();
        }
    },
    methods: {
        dark() {
            document.querySelector("body").classList.add("dark");
            this.toggleActive = true;
            this.$emit("dark");
        },
        light() {
            document.querySelector("body").classList.remove("dark");
            this.toggleActive = false;
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
            const isDarkModeOn = this.toggleActive;
            createCookie("isDarkModeOn", isDarkModeOn.toString(), 60 * 60 * 24);
        },
    },
};
</script>

<style></style>
