<template>
    <img
        v-if="!store.toggleActive"
        src="/images/My-Logo-Newsletter-Dark.png"
        width="240"
        alt="Newsletter logo dark"
    />
    <img
        v-if="store.toggleActive"
        src="/images/My-Logo-Newsletter.png"
        width="240"
        alt="Newsletter logo"
    />
</template>

<script>
import { store } from "./store.js";
export default {
    data() {
        return {
            store,
        };
    },
};
</script>

<style></style>
