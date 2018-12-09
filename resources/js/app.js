import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import {routes} from './routes';
import MainComponent from './components/MainComponent.vue'

Vue.use(VueRouter);
Vue.use(Vuex);

require('./bootstrap');

const router = new VueRouter({
    router,
    mode: 'history'
});

const app = new Vue({
    el: '#app',
    router,
    components:{
        MainComponent
    }

});
