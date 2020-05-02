import Vue from "vue";
import Vuex from "vuex";
Vue.use(Vuex);

const stateTemplate = {
    name: "",
    emailList: [""]
};

const deepCopyObj = obj => JSON.parse(JSON.stringify(obj));

const store = new Vuex.Store({
    state: [deepCopyObj(stateTemplate)],
    mutations: {
        setName(state, { index, name }) {
            state[index].name = name;
        },
        setEmail(state, { indexState, indexEmail, email }) {
            state[indexState].emailList[indexEmail] = email;
        },
        addStateElement(state) {
            state.push(deepCopyObj(stateTemplate));
        },
        removeStateElement(state) {
            if (state.length > 1) {
                state.pop();
            }
        },
        addEmail(state, index) {
            state[index].emailList.push("");
        },
        removeEmail(state, { indexState, indexEmail }) {
            if (state[indexState].emailList.length > 1) {
                state[indexState].emailList.splice(indexEmail, 1);
            }
        }
    }
});

export default store;
