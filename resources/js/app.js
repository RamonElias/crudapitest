/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key =>
//    Vue.component(
//       key
//          .split('/')
//          .pop()
//          .split('.')[0],
//       files(key).default
//    )
// );

// Vue.component(
//    'example-component',
//    require('./components/ExampleComponent.vue').default
// );

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//    el: '#app'
// });

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from './views/App';
import Home from './views/Home';
import Hello from './views/Hello';
import UsersEdit from './views/UsersEdit';
import UsersIndex from './views/UsersIndex';
import NotFound from './views/NotFound';

const router = new VueRouter({
   mode: 'history',
   routes: [
      {
         path: '/',
         name: 'home',
         component: Home
      },
      {
         path: '/hello',
         name: 'hello',
         component: Hello
      },
      {
         path: '/users',
         name: 'users.index',
         component: UsersIndex
      },
      {
         path: '/users/:id/edit',
         name: 'users.edit',
         component: UsersEdit
      },
      { path: '/404', name: '404', component: NotFound },
      { path: '*', redirect: '/404' }
   ]
});

const app = new Vue({
   el: '#app',
   components: { App },
   router
});
