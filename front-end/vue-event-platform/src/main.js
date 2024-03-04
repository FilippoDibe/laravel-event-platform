import { createApp } from 'vue'
import './style.css'
import '../src/scss/style.scss'
import App from './App.vue'
import { router } from './router'

createApp(App).use(router).mount('#app')
