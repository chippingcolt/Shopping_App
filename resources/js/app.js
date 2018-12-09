import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import {routes} from './routes';
import StoreData from './store';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

import MainComponent from './components/MainComponent'

Vue.use(Vuetify)

Vue.use(VueRouter);
Vue.use(Vuex);

require('./bootstrap');

//vuex store
const store = new Vuex.Store(StoreData);

//router instance
const router = new VueRouter({
    routes,
    mode: 'history'
});
//app instance
const app = new Vue({
    el: '#app',
    router,
    store,
    components:{
        MainComponent
    }

});
