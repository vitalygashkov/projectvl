<template>
  <footer>
    <div class="links">
      <div class="column sitemap">
        <div class="column__title">Карта сайта</div>
        <router-link class="column__item" to="/">Главная</router-link>
        <router-link class="column__item" to="/services" v-scroll-to="'.services'">Наши услуги</router-link>
        <router-link class="column__item" to="/about" v-scroll-to="'.about'">О нас</router-link>
        <router-link class="column__item" to="/contacts" v-scroll-to="'.contacts'">Контакты</router-link>
      </div>
      <div class="column contacts">
        <div class="column__title">Контакты</div>
        <div class="column__item"><a href="tel:+73422737807">+7 (342) 273-78-07</a></div>
        <div class="column__item"><a href="tel:+79222406222">+7 (922) 240-62-22</a></div>
        <div class="column__item"><a href="tel:+79223115016">+7 (922) 311-50-16</a></div>
        <div class="column__item"><a href="mailto:proectvl@yandex.ru">proectvl@yandex.ru</a></div>
      </div>
    </div>
    <hr>
    <div class="copyright">
      © Проект VL – 2020
    </div>
  </footer>
</template>

<script>
export default {
  name: 'TheFooter'
}
</script>

<style scoped>
footer {
  padding: 660px 220px 0;
  color: white;
  height: 935px;
  background: url("https://imgpile.com/images/ImvTQo.png") no-repeat center;
}
hr {
  margin: 20px 0;
  border-color: orangered;
}
.links {
  width: 100%;
  display: inline-flex;
  justify-content: space-between;
}
.column {
  display: block;
}
.column__title {
  font-size: 24px;
  color: orangered;
  margin-bottom: 30px;
}
.column__item {
  display: block;
  cursor: pointer;
  margin-bottom: 10px;
  transition: .2s;
}
.contacts {
  text-align: right;
}
.sitemap .column__item:hover {
  color: orange;
  margin-left: 5px;
}
.contacts .column__item:hover {
  color: orange;
  margin-right: 5px;
}
@media only screen and (max-width: 600px) {
  footer {
    padding: 660px 20px 0;
  }
}
</style>
