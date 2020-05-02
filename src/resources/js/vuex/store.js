import Vue from "vue";
import Vuex from "vuex";
Vue.use(Vuex);

const state = {
    name: "",
    email: [""]
};

const store = new Vuex.Store({
    state: [state]
});

export default store;
