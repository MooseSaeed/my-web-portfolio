require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import { createApp } from "vue";
import router from "./router";
import CategoryDropdown from "./components/categories/CategoryDropdown";
import vClickOutside from "click-outside-vue3";

createApp({
    components: {
        CategoryDropdown,
    },
})
    .use(router, vClickOutside)
    .mount("#app");
