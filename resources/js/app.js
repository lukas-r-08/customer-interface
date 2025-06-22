import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import ServerControl from './components/ServerControl.vue';

const app = createApp({
    data() {
        return {
            defaultServerId: 1 // oder hole dies aus deiner Backend-Konfiguration
        }
    }
});
app.component('server-control', ServerControl);
app.mount('#app');
