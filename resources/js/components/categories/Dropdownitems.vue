<template>
    <a href="" class="demogard categoryItems">
        <slot>{{ category }}</slot>
    </a>
</template>

<script>
export default {
    name: "Dropdownitems",
    props: ["category"],
};
</script>

<style></style>
