import Vue from 'vue';
import Vuex from 'vuex';
// import axios from 'axios';
import employee from "./modules/employee";
import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex);

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    strict: debug,
    plugins: [createPersistedState()],
    modules: {
        employee
    },
    state: {
    },
    mutations: {
    },
    actions: {
    },
    getters: {
    }
})
