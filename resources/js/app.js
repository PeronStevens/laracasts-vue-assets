import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

require('./bootstrap');

Vue.use(VueRouter);

// Vue.component('Home', require('./components/Home.vue').default);
// Vue.component('About', require('./components/About.vue').default);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
