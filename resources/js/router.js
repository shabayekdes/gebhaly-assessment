import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Dashboard from "@Admin/pages/Dashboard";
import ListServices from "@Admin/pages/service/List";

const routes = [
    {
        path: "/admin",
        name: "dashboard",
        component: Dashboard
    },
    {
        path: "/admin/service",
        name: "service.index",
        component: ListServices
    }
];

const router = new VueRouter({
    routes,
    mode: "history"
});

export default router;