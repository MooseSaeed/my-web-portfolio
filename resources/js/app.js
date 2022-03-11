require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import { createApp } from "vue";
import Dropdown from "./components/categories/Dropdown";
import Dropdowncontent from "./components/categories/Dropdowncontent";
import Dropdownitems from "./components/categories/Dropdownitems";
import vClickOutside from "click-outside-vue3";
import Flashmessage from "./components/Flashmessage";
import Card from "./components/Card";
import Switchdark from "./components/darkcomponents/Switchdark";
import Svglogodark from "./components/darkcomponents/Svglogodark";
import Svgnewsletterdark from "./components/darkcomponents/Svgnewsletterdark";
import Swiperslides from "./components/devto/Swiperslides";
import Swiperslidescontent from "./components/devto/Swiperslidescontent";
import Swiperimg from "./components/devto/Swiperimg";
import Swiperheader from "./components/devto/Swiperheader";
import Swiperfooter from "./components/devto/Swiperfooter";
import Swiperbutton from "./components/devto/Swiperbutton";
import Swipertitle from "./components/devto/Swipertitle";
import Linkspage from "./components/Linkspage";
import Bloglogo from "./components/Bloglogo";

createApp({
    components: {
        Dropdown,
        Dropdowncontent,
        Dropdownitems,
        Flashmessage,
        Card,
        Switchdark,
        Svglogodark,
        Svgnewsletterdark,
        Swiperslides,
        Swiperslidescontent,
        Swiperimg,
        Swiperheader,
        Swiperfooter,
        Swiperbutton,
        Swipertitle,
        Linkspage,
        Bloglogo,
    },
})
    .use(vClickOutside)
    .mount("#app");

import Swiper, { Navigation, Pagination } from "swiper";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

var swiper = new Swiper(".mySwiper", {
    slidesPerView: "1",
    // Responsive breakpoints
    breakpoints: {
        782: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
    modules: [Pagination, Navigation],
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

import "aos/dist/aos.css";
import AOS from "aos";
AOS.init();
