import { createRouter, createWebHistory } from "vue-router";

import CategoryDropdown from "../components/categories/CategoryDropdown";

const routes = [
    {
        path: "/",
        name: "home",
        component: CategoryDropdown,
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
