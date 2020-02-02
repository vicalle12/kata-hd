import Vue from 'vue'
import App from './App.vue'
import Vuex from 'vuex';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

Vue.use(Vuetify);
Vue.use(Vuex);

import VueRouter from 'vue-router';

Vue.use(VueRouter);

Vue.config.productionTip = false;

import router from "./router";

new Vue({
  router,
  vuetify: new Vuetify(),
  render: h => h(App),
}).$mount('#app');
