import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Dashboard from "@Admin/pages/Dashboard";
import ListServices from "@Admin/pages/service/List";
import ListOrders from "@Admin/pages/order/List";

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
    },
    {
        path: "/admin/order",
        name: "order.index",
        component: ListOrders
    }
];

const router = new VueRouter({
    routes,
    mode: "history"
});

export default router;