require('./bootstrap');

// import Vue from 'vue'
import * as Vue from 'vue';
import { createApp } from 'vue'
import App from './vue/app.vue'

// const app=new Vue({
//     el:'#app',
//     components:{ App }
// })
createApp(App).mount('#app');
