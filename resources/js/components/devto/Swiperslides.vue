<template>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <slot />
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</template>

<script>
// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";
import "swiper/css/navigation";
import Swiperslidescontent from "./Swiperslidescontent";
export default {
    components: { Swiperslidescontent },
};
</script>

<style></style>
