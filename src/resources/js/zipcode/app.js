require("../bootstrap");

import Vue from "vue";

import Input from "../components/zipcode/Input.vue";

window.Vue = Vue;

const appZipCode = new Vue({
    el: "#app-zipcode",
    components: {
        "input-component": Input
    }
});
