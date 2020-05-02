require("../bootstrap");

import Vue from "vue";

import store from "./store";
import router from "./router";

window.Vue = Vue;

const app = new Vue({
    el: "#app",
    store: store,
    router: router
});
