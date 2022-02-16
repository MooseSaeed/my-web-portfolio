<template>
    <transition
        :duration="1000"
        enter-active-class="transform transition duration-300 ease-custom"
        enter-class="-translate-y-1/2 scale-y-0 opacity-0"
        enter-to-class="translate-y-0 scale-y-100 opacity-100"
        leave-active-class="transform transition duration-300 ease-custom"
        leave-class="translate-y-0 scale-y-100 opacity-100"
        leave-to-class="-translate-y-1/2 scale-y-0 opacity-0"
    >
        <div
            v-show="showFlash"
            class="fixed bottom-3 right-3 rounded-xl bg-blue-500 py-2 px-4 text-sm text-white"
        >
            <p>{{ message }}</p>
        </div>
    </transition>
</template>

<script>
import { ref } from "@vue/runtime-core";
export default {
    name: "Flashmessage",
    props: ["message"],
    setup() {
        const showFlash = ref(true);

        const hideFlash = setTimeout(() => {
            showFlash.value = false;
        }, 5000);

        return {
            showFlash,
            hideFlash,
        };
    },
};
</script>

<style></style>
