<template>
    <img v-if="!store.toggleActive" src="/images/my-logo-dark.png" alt="" />
    <img v-if="store.toggleActive" src="/images/my-logo.png" alt="" />
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
