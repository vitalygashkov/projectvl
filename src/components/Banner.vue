<template>
  <div class="banner wow fadeIn">
    <div class="title">{{ this.title }}</div>
    <div class="items">
      <div class="item" v-for="(item, index) in items" :key="index">{{ item }}</div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Main',
  props: ['caption'],
  data() {
    return {
      title: '',
      items: []
    }
  },
  mounted() {
    switch (this.caption.text) {
      case '1':
        this.title = 'Демонтажные работы в Перми и Пермском крае';
        this.items = [
          'Имеем все допуски и лицензии для выполнения демонтажных работ',
          'Уберем и вывезем строительный мусор после демонтажа',
          'Гарантируем 100% соблюдение сроков по договору'
        ]
        break;
      case '2':
        this.title = 'Промышленный альпинизм';
        this.items = [
          'Очистка кровли от снега и наледи, удаление сосулек',
          'Ремонт межпанельных швов',
          'Мойка остекления и фасадов',
          'Фасадные работы',
          'Покраска любой сложности'
        ]
        break;
      case '3':
        this.title = 'Кронирование и спил деревьев';
        this.items = [
          'Удаление и обрезка деревьев',
          'Кронирование деревьев',
          'Удаление аварийных деревьев',
          'Валка деревьев',
          'Расчистка ЛЭП от деревьев и кустов'
        ]
        break;
      default:
        break;
    }
  }
}
</script>

<style scoped>

.banner {
  color: white;
  position: absolute;
  top: 25vh;
  /*transform: translateY(-50%);*/
  margin-top: 4vh;
  margin-left: 40px;
  text-shadow: #000000 0 0 2px;
}
.title {
  font-size: 3rem;
  /*line-height: 44px;*/
  padding: 15px;
  background-color: rgba(0, 0, 0, 0.50);
  border: 3px dashed orange;
  width: fit-content;
}
.items {
  color: yellow;
  margin: 10px 0;
}
.item {
  font-size: 2.4rem;
  font-weight: bold;
  margin-left: 20px;
  margin-bottom: 20px;
}
@media (min-width: 1600px) {
  .banner {
    margin-left: 80px;
    margin-top: 0;
  }
  .title {
    font-size: 3.5rem;
  }
  .item {
    font-size: 2.5rem;
  }
}
.btn {
  cursor: pointer;
  height: fit-content;
  text-transform: uppercase;
  font-size: 28px;
  font-weight: 800;
  margin-top: 5px;
  padding: 14px 30px;
  border: 3px dashed transparent;
  transition: .23s;

  color: white;
  background: url('../assets/button-brown.png') no-repeat center;
  background-size: contain;
}
.btn:hover {
  font-weight: 800;
  transform: scale(1.2);
  color: orange;
  border: 3px dashed orange;
  background: black;
  background-size: contain;
}
@media (max-height: 710px) {
  .banner {
    top: 28vh;
  }
  .title {
    font-size: 2.2rem;
  }
  .item {
    font-size: 2rem;
    margin-bottom: 10px;
  }
}
@media only screen and (max-width: 600px) {
  .banner {
    width: 95vw;
    top: 10vh;
    margin-top: 10vh;
    margin-left: 10px;
    margin-right: 10px;
    text-shadow: #000000 0 0 2px;
  }
  .title {
    font-size: 2rem;
    /*line-height: 44px;*/
    padding: 15px;
    background-color: rgba(0, 0, 0, 0.50);
    border: 3px dashed orange;
    width: fit-content;
  }
  .items {
    color: yellow;
    margin: 20px 0;
  }
  .item {
    font-size: 1.5rem;
    margin-left: 20px;
    margin-bottom: 20px;
  }
}
</style>
