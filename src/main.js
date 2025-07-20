import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router' // 👈 importe le routeur

createApp(App)
  .use(router) // 👈 active Vue Router
  .mount('#app')
