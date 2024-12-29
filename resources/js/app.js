import './bootstrap';
import './style';

import { createApp } from 'vue'
import Login from '../vue/layouts/Login.vue'

const app = createApp({});
app.component('login', Login);
app.mount('#app')