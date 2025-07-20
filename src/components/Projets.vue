<script setup></script>

<template>
  <!-- <div id="projets-certif">
    <div id="projets">
      
    </div>
    <div id="certifications">
      <div id="certification-1" class="cadre certification">
        Certif 1
      </div>
      <div id="certification-2" class="cadre certification">
        Certif 2
      </div>
      <div id="certification-3" class="cadre certification">
        Certif 3
      </div>
      <div id="certification-4" class="cadre certification">
        Certif 4
      </div>
    </div>
  </div> -->
</template>

<style scoped>
.cadre {
  background-color: rgba(123, 158, 206, 0.7);
  padding: 30px;
}
#certifications {
  display: grid;
  grid-template-columns: 1fr;
  gap: 20px;
}
.certification {
  height: 200px;
}
@media (min-width: 577px) {
  #certifications {
    grid-template-columns: repeat(2, 1fr);
  }
}
</style>
