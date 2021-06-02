import { createApp } from 'vue';
import App from './App.vue';
import Api from './api';

const app = createApp(App);
app.config.globalProperties.$api = new Api();

app.mount('#app');
