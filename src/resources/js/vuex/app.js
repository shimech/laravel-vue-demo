require("../bootstrap");

import Vue from "vue";

import store from "./store";
import router from "./router";

window.Vue = Vue;

const appVuex = new Vue({
    el: "#app-vuex",
    store: store,
    router: router
});
