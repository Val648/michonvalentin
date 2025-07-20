<script setup>
import { reactive, onMounted } from 'vue'
import { formations } from '../data/parcours.json'
</script>

<template>
  <!-- <div id="parcours">
    <h1>Mon parcours</h1>
    <div id="frise">
      <div
        v-for="(info, index) in formations"
        :key="index"
        class="cadre-element"
        :class="{ left: index % 2 == 0, right: index % 2 != 0 }"
        :style="{ top: index * 224 + 'px' }"
      >
        <div class="cadre-formation">
          <div class="cadre-explication">
            <p>{{ info.nom }}</p>
            <p>{{ info.apercu }}</p>
            <button>En savoir plus</button>
          </div>
        </div>
        <div class="fleche"></div>
        <p class="date">{{ info.date }}</p>
      </div>
      <div class="vertical-line">
        <div v-for="(info, index) in formations" :key="index" class="point">
          <div></div>
        </div>
      </div>
    </div>
  </div> -->
</template>

<style scoped>
h1 {
  text-decoration: underline;
}
p {
  padding: 0;
  margin: 0;
}
#frise {
  display: flex;
  justify-content: center;
  padding: 50px 0px;
  border: black 2px solid;
  position: relative;
}
.vertical-line {
  border: solid 6px grey;
  border-radius: 40px;
  height: 100%;
  width: 0px;
  margin: 0 -10px;
  padding: 100px 0;
  display: grid;
  justify-content: center;
  gap: 200px;
  z-index: -1;
}
.point {
  border: solid 12px grey;
  border-radius: 40px;
  height: 0px;
  width: 0px;
  position: relative;
}
.point div {
  border: solid 7px rgb(255, 255, 255);
  border-radius: 40px;
  height: 0px;
  width: 0px;
  position: absolute;
  top: -6.5px;
  left: -6.5px;
}
.cadre-element {
  display: flex;
  flex-direction: row;
  align-items: center;
  position: absolute;
  margin-top: 83px;
}
.left {
  right: 55%;
}
.right {
  left: 55%;
}
.cadre-formation {
  background-color: grey;
  height: 150px;
  width: 250px;
  padding: 10px;
  border-radius: 10px;
}
.fleche {
  position: absolute;
  width: 0;
  height: 0;
  border: 10px solid transparent;
}
.left .fleche {
  right: -24px;
  border-left: 15px solid grey;
}
.right .fleche {
  left: -24px;
  border-right: 15px solid grey;
}
.cadre-explication {
  background-color: rgb(255, 255, 255);
  height: 100%;
  width: 100%;
  border-radius: 5px;
}
.date {
  position: absolute;
  width: 150px;
}
.left .date {
  left: 350px;
}
.right .date {
  right: 270px;
}
</style>
