require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import { createApp } from "vue";
import router from "./router";
import Dropdown from "./components/categories/Dropdown";
import Dropdowncontent from "./components/categories/Dropdowncontent";
import Dropdownitems from "./components/categories/Dropdownitems";
import vClickOutside from "click-outside-vue3";

createApp({
    components: {
        Dropdown,
        Dropdowncontent,
        Dropdownitems,
    },
})
    .use(router, vClickOutside)
    .mount("#app");
