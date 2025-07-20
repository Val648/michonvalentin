<script setup>
import { onMounted, ref } from 'vue'
import { presentation, avenir, interets } from '../data/accueil.json'

const affichers = ref([])

onMounted(() => {
  affichers.value = interets.map(() => false)
})
</script>

<template>
  <div id="accueil">
    <h1>MICHON Valentin</h1>
    <div id="contenu-accueil">
      <div id="presentation" class="cadre">
        <div>
          <img
            src="https://media.licdn.com/dms/image/v2/D4D35AQEFZr7N5znf5A/profile-framedphoto-shrink_400_400/B4DZeovJouG8Ak-/0/1750882622434?e=1753174800&v=beta&t=rLB-vL6XR3rURjr0kG4KYFoUyxQev1mHJLkd1aFCwSU"
            alt="photo"
          />
          <div>
            <p>{{ presentation[0] }}</p>
            <p>{{ presentation[1] }}</p>
          </div>
        </div>
        <div>
          <p>{{ presentation[2] }}</p>
        </div>
      </div>

      <div id="projet" class="cadre">
        <h2>Mon projet d'avenir</h2>
        <div>
          <p>{{ avenir }}</p>
          <div>
            <img
              src="https://img.freepik.com/vecteurs-libre/medecine-ligne_24877-49093.jpg?semt=ais_hybrid&w=740"
              alt="photo"
              class="illustrations-infosante"
            />
            <img
              src="https://imedica.fr/wp-content/uploads/2021/05/kligo-medeo-medistory-alsace.png"
              alt="Image d'objets connectés"
              class="illustrations-infosante"
            />
            <img
              src="https://medias.pourlascience.fr/api/v1/images/view/65c643486ebe1e1aa568c31c/wide_1000-webp/image.jpg"
              alt="photo"
              class="illustrations-infosante img-a-afficher"
            />
          </div>
        </div>
      </div>

      <div id="interets" class="cadre">
        <h2>Mes centres d'intérêts</h2>
        <div class="interets">
          <div v-for="(interet, index) in interets" :key="index" class="interet">
            <div class="interet-titre">
              <span class="fleche" :class="{ ouverte: affichers[index] }"></span>
              <h3 @click="affichers[index] = !affichers[index]">{{ interet.nom }}</h3>
            </div>
            <Transition name="slide">
              <div v-if="affichers[index]" class="contenu">
                <p>{{ interet.description }}</p>
              </div>
            </Transition>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
#contenu-accueil {
  display: flex;
  flex-direction: column;
  gap: 40px;
  text-align: justify;
}
.cadre {
  background-color: rgb(109, 149, 169);
  padding: 25px 30px;
  border-radius: 30px;
}
p {
  padding: 8px 0;
  margin: 0;
  font-size: 14px;
}
h1 {
  text-decoration: underline;
  margin-bottom: 30px;
  margin-top: 10px;
}
h2 {
  margin-top: 0;
  margin-bottom: 10px;
  width: 100%;
  border-bottom: solid black 1px;
}
h3 {
  margin: 5px 0;
}
#presentation {
  display: flex;
  flex-direction: column;
  justify-content: center;
}
#presentation div {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
#presentation div div {
  display: flex;
  flex-direction: column;
}
#presentation img {
  border-radius: 80px;
  height: 120px;
  margin-bottom: 10px;
}
#projet div {
  display: flex;
  flex-direction: column;
  row-gap: 20px;
}
#projet div div {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
}
.illustrations-infosante {
  display: none;
  width: auto;
  border-radius: 20px;
  box-shadow: 3px 3px 4px rgba(79, 79, 79, 0.5);
}
.img-a-afficher {
  display: inline;
  height: 80px;
}
.fleche {
  width: 10px;
  height: 15px;
  background-color: black;
  clip-path: polygon(0% 0%, 100% 50%, 0% 100%);
  margin: 10px 10px 0px 20px;
  transition: transform 0.5s ease;
}
.fleche.ouverte {
  transform: rotate(90deg);
}
.interets {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
.interet {
  display: flex;
  flex-direction: column;
}
.interet-titre {
  display: flex;
}
.interet-titre h3:hover {
  text-decoration: underline;
  cursor: pointer;
}
@media (min-width: 768px) {
  #contenu-accueil {
    gap: 50px;
  }
  p {
    font-size: 18px;
  }
  .cadre {
    padding: 25px 35px;
  }
  #presentation {
    gap: 10px;
  }
  #presentation div {
    flex-direction: row;
    column-gap: 30px;
  }
  #presentation img {
    height: 160px;
    margin: 0;
  }
  #projet div img {
    display: inline;
  }
  .illustrations-infosante {
    height: 130px;
  }
}
</style>
