import './bootstrap';

import { createApp } from 'vue'
import App from '../vue/App.vue'
import Prueba from '../vue/Prueba.vue'

const app = createApp({});
app.component('app', App);
app.component('prueba', Prueba);
app.mount('#app')