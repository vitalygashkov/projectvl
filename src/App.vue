<template>
  <div id="app">
    <TheHeader/>
    <router-view />
    <TheFooter/>
  </div>
</template>

<script>
import TheHeader from './components/TheHeader'
import TheFooter from './components/TheFooter'

export default {
  name: 'App',
  components: {
    TheHeader,
    TheFooter
  }
}
</script>

<style>
@font-face {
  font-family: "Dirty Headline";
  src: url("./assets/fonts/dirty-headline.ttf") format("truetype");
}

* {
  box-sizing: border-box;
}
a {
  color: inherit;
  text-decoration: none;
}
body, button, input {
  font-family: 'Dirty Headline', Oswald, Helvetica, Arial, sans-serif;
}
body {
  margin: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background: url('./assets/background.jpg');
}
.vue-flux .complements {
  margin: auto;
  width: 1080px;
}
@media (min-width: 1600px) {
  .vue-flux .complements {
    width: 1300px;
  }
}
.card {
  color: white;
  text-shadow: #dadada 0 0 10px;
}
.card__title {
  font-size: 45px;
  line-height: 45px;
  padding: 10px;
  background-color: rgba(0, 0, 0, 0.50);
  border: 3px dashed orange;
  width: fit-content;
}
.card__items {
  color: #121212;
  margin: 15px 0;
}
.card__item {
  cursor: default;
  font-size: 32px;
  margin-left: 20px;
  margin-bottom: 10px;
}
.card__item.active {
  font-size: 35px;
  font-weight: bold;
  color: darkred;
  margin-left: 10px;
}
.card__item.active:not(:first-child) {
  margin-top: 50px;
}
@media only screen and (max-width: 600px) {
  .vue-flux .complements {
    width: 100%;
  }
  .card {
    color: white;
    text-shadow: #dadada 0 0 10px;
  }
  .card__title {
    font-size: 30px;
    line-height: 30px;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.50);
    border: 3px dashed orange;
    width: fit-content;
  }
  .card__items {
    color: #121212;
    margin: 20px 0;
  }
  .card__item {
    cursor: default;
    font-size: 24px;
    margin-left: 15px;
    margin-bottom: 25px;
  }
  .card__item.active {
    font-size: 34px;
    font-weight: bold;
    color: darkred;
    margin-left: 10px;
  }
  .card__item.active:not(:first-child) {
    margin-top: 50px;
  }
}
</style>
