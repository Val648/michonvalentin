// src/router/index.js
import { createRouter, createWebHistory } from 'vue-router'

// Importe tes composants Vue (pages)
import Accueil from '../components/Accueil.vue'
import Parcours from '../components/Parcours.vue'
import Projets from '../components/Projets.vue'
import Veilles from '../components/Veilles.vue'
import Contact from '../components/Contact.vue'
import Temporaire from '../components/Temporaire.vue'

const routes = [
  { path: '/', component: Accueil },
  { path: '/parcours', component: Temporaire },
  { path: '/projets', component: Temporaire },
  { path: '/veilles', component: Temporaire },
  { path: '/contact', component: Temporaire },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
