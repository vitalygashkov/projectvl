<template>
  <div class="contacts">
    <div class="card wow fadeIn">
      <div class="card__title">Контакты</div>
      <div class="card__items">
        <div class="card__item"><a href="tel:+73422737807">+7 (342) 273-78-07</a></div>
        <div class="card__item"><a href="tel:+79222406222">+7 (922) 240-62-22</a></div>
        <div class="card__item"><a href="tel:+79223115016">+7 (922) 311-50-16</a></div>
        <div class="card__item"><a href="mailto:proectvl@yandex.ru">proectvl@yandex.ru</a></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Contacts"
}
</script>

<style scoped>
.contacts {
  padding: 200px 40px 0;
  margin: auto;
  width: 1080px;
}
@media (min-width: 1600px) {
  .contacts {
    padding: 250px 80px 0;
    width: 1300px;
  }
}
@media only screen and (max-width: 600px) {
  .contacts {
    padding: 90px 15px 0;
    margin: auto;
    width: 100%;
  }
}
</style>
