// app.js

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import { BootstrapVue } from 'bootstrap-vue';
Vue.use(BootstrapVue)
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);


//allcustomer
import CustomerComponent from './components/CustomerComponent.vue';
//createcustomer
import CreatecustomerComponent from './components/CreatecustomerComponent.vue';
//edit
import EditcustomerComponent from './components/EditcustomerComponent.vue';
const routes = [
    {
        name: 'home',
        path: '/',
        component: CustomerComponent
    },
    {
        name: 'customer',
        path: '/customer',
        component: CustomerComponent
    },
    {
        name: 'createcustomer',
        path: '/createcustomer',
        component: CreatecustomerComponent
    },
    {
        name: 'editcustomer',
        path: '/editcustomer/:id',
        component: EditcustomerComponent
    },
   //editcustomer
    // {
    //     name: 'create',
    //     path: '/create',
    //     component: CreateComponent
    // },
    // {
    //     name: 'posts',
    //     path: '/posts',
    //     component: IndexComponent
    // },
    // {
    //     name: 'edit',
    //     path: '/edit/:id',
    //     component: EditComponent
    // }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
