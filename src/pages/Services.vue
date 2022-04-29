<template>
  <div class="services">
    <div class="card wow fadeIn">
      <div class="card__title">Наши услуги</div>
      <div class="card__items">
        <div class="card__item active">Демонтаж</div>
        <div class="card__item">Ручной и механизированный демонтаж</div>
        <div class="card__item">Снос зданий и сооружений</div>
        <div class="card__item">Промышленный демонтаж</div>
        <div class="card__item">Демонтаж в квартире или в офисе</div>
        <div class="card__item">Демонтаж дачных домов и фундаментов</div>
        <div class="card__item">Демонтаж кровли фасадов и заборов</div>
        <div class="images" v-viewer>
          <img v-for="image in 10" class="image" :key="image" :src="require(`../assets/images/dismantling/${image}.jpg`)">
        </div>
        <div class="card__item active">Кронирование и спил деревьев</div>
        <div class="card__item">Удаление и обрезка деревьев</div>
        <div class="card__item">Кронирование деревьев</div>
        <div class="card__item">Удаление аварийных деревьев</div>
        <div class="card__item">Валка деревьев</div>
        <div class="card__item">Расчистка ЛЭП от деревьев и кустов</div>
        <div class="images" v-viewer>
          <img v-for="image in 10" class="image" :key="image" :src="require(`../assets/images/croning/${image}.jpg`)">
        </div>
        <div class="card__item active">Промышленный альпинизм</div>
        <div class="card__item">Очистка кровли от снега и наледи, удаление сосулек</div>
        <div class="card__item">Ремонт межпанельных швов</div>
        <div class="card__item">Мойка остекления и фасадов</div>
        <div class="card__item">Фасадные работы</div>
        <div class="card__item">Покраска любой сложности</div>
        <div class="images" v-viewer>
          <img v-for="image in 10" class="image" :key="image" :src="require(`../assets/images/alpinism/${image}.jpg`)">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import 'viewerjs/dist/viewer.css'
import Viewer from 'v-viewer'
import Vue from 'vue'
Vue.use(Viewer);

export default {
  name: "Services.vue"
}
</script>

<style scoped>
.services {
  padding: 200px 40px 0;
  margin: auto;
  width: 1080px;
}
.images {
  margin: 50px 0;
  padding: 10px;
  border: 3px dashed orange;
}
.image {
  object-fit: cover;
  height: 150px;
  width: calc(25% - 10px);
  cursor: pointer;
  margin: 5px;
  display: inline-block;
}
@media (min-width: 1600px) {
  .services {
    padding: 250px 80px 0;
    width: 1300px;
  }
}
@media only screen and (max-width: 600px) {
  .services {
    padding: 90px 15px 0;
    margin: auto;
    width: 100%;
  }
  .image {
    width: calc(50% - 10px);
  }
}
</style>
