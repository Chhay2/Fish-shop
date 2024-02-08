// import './assets/main.css'
import "bootstrap/dist/css/bootstrap.css"
import "bootstrap/dist/js/bootstrap.js"


import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import axios from 'axios'
axios.defaults.baseURL = 'http://localhost/api';
const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')
