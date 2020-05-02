import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

import Input from "../components/vuex/Input.vue";
import Check from "../components/vuex/Check.vue";

const routes = [
    {
        path: "/vuex",
        component: Input
    },
    {
        path: "/vuex/check",
        component: Check
    }
];

const router = new VueRouter({
    mode: "history",
    routes: routes,
    scrollBehavior() {
        return { x: 0, y: 0 };
    }
});

export default router;
