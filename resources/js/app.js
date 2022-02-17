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

createApp({
    components: {
        Dropdown,
        Dropdowncontent,
        Dropdownitems,
        Flashmessage,
    },
})
    .use(vClickOutside)
    .mount("#app");
