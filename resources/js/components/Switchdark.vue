<template>
    <div
        class="flex cursor-pointer items-center justify-between"
        @click="modeToggle"
    >
        <div
            class="flex h-10 w-16 items-center rounded-full bg-gray-300 p-1 duration-300 ease-in-out"
            :class="{ 'bg-green-400': toggleActive }"
        >
            <div
                class="h-8 w-8 transform rounded-full bg-white shadow-md duration-300 ease-in-out"
                :class="{ 'translate-x-6': toggleActive }"
            ></div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            toggleActive: false,
        };
    },
    beforeUnmount() {
        if (
            this.darkMode ||
            document.querySelector("body").classList.contains("dark")
        ) {
            this.dark();
        } else {
            this.light();
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
