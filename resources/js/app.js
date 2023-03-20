require('./bootstrap');

// import Vue from 'vue'
window.Vue = require('vue');
import * as Vue from 'vue';
import { createApp } from 'vue'
import App from './vue/app.vue'

// const app=new Vue({
//     el:'#app',
//     components:{ App }
// })
// Vue.component('Anime', require('./vue/components/Anime.vue'));
createApp(App).mount('#app');
