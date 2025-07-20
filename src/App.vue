<script setup>
import { ref } from 'vue'
const menuIsOpen = ref(false)
</script>

<template>
  <div id="contenu">
    <header></header>
    <main>
      <aside :class="{ ouvert: menuIsOpen }">
        <div class="fleche" :class="{ decalage: menuIsOpen }" @click="menuIsOpen = !menuIsOpen">
          <span></span>
        </div>
        <Transition name="horizontalslide">
          <ul :class="{ affiche: menuIsOpen }">
            <li><router-link to="/">Accueil</router-link></li>
            <li><router-link to="/parcours">Mon parcours</router-link></li>
            <li><router-link to="/projets">Mes projets</router-link></li>
            <li><router-link to="/veilles">Mes veilles</router-link></li>
            <li><router-link to="/contact">Contact</router-link></li>
          </ul>
        </Transition>
      </aside>
      <section>
        <router-view />
      </section>
    </main>
    <footer>
      <p>©2025 MICHON Valentin — Tous droits réservés</p>
    </footer>
  </div>
</template>

<style scoped>
#contenu {
  min-height: 100%;
  display: flex;
  flex-direction: column;
}
header {
  display: flex;
  background-color: #0f7b7b;
  width: 100%;
  height: 50px;
}
main {
  display: flex;
  flex-direction: row;
  flex: 1;
  position: relative;
}
aside {
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #2eb1b1;
  width: 20px;
  min-height: 100%;
  margin: 0;
  padding: 0;
  position: absolute;
  z-index: 500;
  transition: width 0.8s ease;
}
.fleche {
  display: block;
  position: absolute;
  top: 30px;
  left: 15px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  padding: 14px 8px 14px 14px;
  background-color: #2eb1b1;
  transition: left 0.8s ease;
}
.fleche span {
  display: block;
  width: 10px;
  height: 15px;
  background-color: white;
  clip-path: polygon(0% 0%, 100% 50%, 0% 100%);
}
.fleche:hover {
  cursor: pointer;
}
.ouvert {
  width: 180px;
}
.affiche {
  display: flex;
}
.decalage {
  left: 175px;
  rotate: 180deg;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  padding-left: 10px;
}
section {
  width: 100%;
  padding: 20px 40px;
  padding-bottom: 40px;
  margin-left: 20px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
footer {
  background-color: #0f7b7b;
  width: 100%;
  height: 50px;
  display: flex;
  justify-content: center;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
footer p {
  font-size: 14px;
  align-self: center;
}
ul {
  display: none;
  flex-direction: column;
  gap: 25px;
  list-style-type: none;
  width: 130px;
  margin: 30px 0;
  padding-left: 5px;
}
a {
  text-decoration: none;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 700;
  font-size: 18px;
  color: white;
  margin: 0;
  padding-left: 0;
  transition: padding-left 0.5s;
}
a:hover {
  color: white;
  text-decoration: underline;
  padding-left: 10px;
}
@media (min-width: 962px) {
  aside ul {
    display: flex;
  }
  aside {
    min-width: 180px;
    position: relative;
  }
  section {
    margin: 0;
    padding: 25px 50px;
    padding-bottom: 60px;
  }
  .fleche {
    display: none;
  }
}
</style>
