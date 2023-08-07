/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('app-tab-bar', require('./components/AppTabBar.vue').default);
Vue.component('show', require('./pages/Show.vue').default);
Vue.component('studio', require('./pages/Studio.vue').default);
Vue.component('sign-up', require('./pages/SignUp.vue').default);
Vue.component('sign-in', require('./pages/SignIn.vue').default);
Vue.component('verification', require('./pages/Verification.vue').default);
Vue.component('ticket', require('./pages/Ticket.vue').default);
Vue.component('edit-profile', require('./pages/EditProfile.vue').default);
Vue.component('not-found', require('./pages/NotFound.vue').default);
Vue.component('forgot-password', require('./pages/ForgotPassword.vue').default);
Vue.component('landing-forgot-password', require('./pages/LandingpageForgotPassword.vue').default);
Vue.component('add-email', require('./pages/addEmail.vue').default);
Vue.component('top-alert', require('./components/TopAlert.vue').default);
Vue.component('kebijakan-privasi', require('./pages/kebijakanPrivasi.vue').default);
Vue.component('syarat-ketentuan', require('./pages/syaratKetentuan.vue').default);
Vue.component('promp-alert', require('./components/PrompAlert.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueRouter from 'vue-router';
import Home from './pages/Home.vue';
import Search from './pages/Search.vue';
import MyShows from './pages/MyShows.vue';
import More from './pages/More.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/search',
            name: 'search',
            component: Search
        },
        {
            path: '/my-shows',
            name: 'my-shows',
            component: MyShows
        },
        {
            path: '/more',
            name: 'more',
            component: More
        }
    ]
});

new Vue({
    router
}).$mount('#app');
