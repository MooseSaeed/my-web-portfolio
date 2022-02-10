import { createRouter, createWebHistory } from "vue-router";

import Dropdown from "../components/categories/Dropdown";

const routes = [
    {
        path: "/",
        name: "home",
        component: Dropdown,
    },
    {
        path: "/categories/:slug",
        name: "categories",
        component: Dropdown,
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
