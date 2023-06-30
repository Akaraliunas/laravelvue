import { createApp } from 'vue'

// require('./bootstrap')

import App from './components/app.vue';

import axios from 'axios'
import router from './router'
import Particles from "vue3-particles";

createApp({
    components: {
        App
    }
}).use(router).mount('#app')

const app = createApp(App)
app.config.globalProperties.$axios = axios;
app.use(router)
app.use(Particles)
app.mount('#app')
