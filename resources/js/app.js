import { createApp } from 'vue'

// require('./bootstrap')

import App from './components/app.vue';

import axios from 'axios'
import router from './router'
import VueProgressBar from "@aacassandra/vue3-progressbar"

createApp({
    components: {
        App
    }
}).use(router).mount('#app')

const options = {
    color: "#3096CD",
    failedColor: "#874b4b",
    thickness: "2px",
    transition: {
      speed: "0.4s",
      opacity: "0.6s",
      termination: 300,
    },
    autoRevert: true,
    location: "top",
    inverse: false,
  };

const app = createApp(App)
app.config.globalProperties.$axios = axios;
app.use(router)
app.use(VueProgressBar, options)
app.mount('#app')
