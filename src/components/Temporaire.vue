<template>
  <div id="temporaire">
    <div id="bloc">
      <p>Portfolio en cours de développement...</p>
      <p>Revenez bientôt pour apprendre à me connaître ! 😉</p>
    </div>
    <div id="contact">
      <a href="https://www.linkedin.com/in/valentin-michon-02a2b3327" target="_blank">
        <img
          class="ph1"
          src="https://cdn-icons-png.freepik.com/512/4494/4494471.png"
          alt="lien linkedin"
        />
      </a>
      <a href="mailto:valentinmichon2005@gmail.com">
        <img
          class="ph2"
          src="https://cdn-icons-png.freepik.com/512/9068/9068649.png"
          alt="valentinmichon2005@gmail.com"
        />
      </a>
    </div>
  </div>
</template>

<style scoped>
#temporaire {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  /* background: linear-gradient(to bottom right, rgb(133, 131, 244), rgb(218, 152, 236)); */
}
#bloc {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: rgb(109, 149, 169);
  border-radius: 50px;
  margin-bottom: 100px;
  padding: 0 30px;
  width: 50%;
  height: 50%;
  font-size: 24px;
  box-shadow: 4px 4px 5px;
  transition:
    width 2s ease,
    height 2s ease,
    font-size 2s ease;
}
#bloc:hover {
  width: 60%;
  height: 60%;
  font-size: 28px;
}
#bloc p {
  margin: 0;
  padding: 0;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  text-align: center;
}
#contact {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  bottom: 30px;
  width: 200px;
  height: 50px;
}
#contact a {
  text-decoration: none;
}
#contact img {
  height: 40px;
  transition: padding-bottom 0.5s ease;
}
#contact img:hover {
  padding-bottom: 20px;
}
@media (max-width: 576px) {
  #bloc {
    font-size: 16px;
  }
  #bloc:hover {
    font-size: 20px;
  }
}
</style>
