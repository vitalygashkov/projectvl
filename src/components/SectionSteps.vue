<template>
  <div class="container">
    <div class="title wow flipInX" data-wow-delay="0.5s">Этапы работы</div>
    <div class="items">
      <div class="item wow fadeInUp" data-wow-delay="0.1s">1. Оставляете заявку на сайте или звоните нам по номеру телефона</div>
      <div class="item wow fadeInUp" data-wow-delay="0.3s">2. Выезд на объект специалиста для проведения замеров и составления сметы</div>
      <div class="item wow fadeInUp" data-wow-delay="0.5s">3. Заключение договора</div>
      <div class="item wow fadeInUp" data-wow-delay="0.7s">4. Выполнение заказа и оплата</div>
    </div>
    <button data-wow-delay="1s" v-scroll-to="'#order'">Получить обратный звонок</button>
  </div>
</template>

<script>
export default {
  name: "SectionSteps"
}
</script>

<style scoped>
.container {
  text-align: center;
  background: url("https://imgpile.com/images/IrdSIo.png") no-repeat center;
  /*background-size: cover;*/
  padding: 50px 0;
  /*height: 100vh;*/
}
.title {
  color: white;
  text-align: center;
  font-size: 52px;
  margin: 80px 0;
  text-shadow: #000000 0 0 5px;
}
.items {
  color: yellow;
  font-size: 34px;
  text-shadow:
    #000000 0 0 30px,
    #000000 0 0 10px,
    #000000 0 0 2px;
  /*padding: 0 200px;*/
}
.item {
  margin-bottom: 40px;
  line-height: 45px;
}
button {
  margin-bottom: 80px;
  cursor: pointer;
  color: white;
  font-size: 28px;
  background: url("https://master-demontazh.ru/templates/g5_destroy/images/order-l2.png") no-repeat center;
  width: 675px;
  height: 140px;
  border: none;
  outline: none;
  transition: .3s;
}
button:hover {
  transform: scale(1.1);
}
button:active {
  transform: scale(0.9);
}
@media only screen and (max-width: 600px) {
  .container {
    padding: 20px 0;
  }
  .title {
    margin: 35px 0;
    font-size: 42px;
  }
  .items {
    font-size: 24px;
  }
  .item {
    margin-bottom: 30px;
    line-height: 30px;
  }
  button {
    font-size: 20px;
    width: 100%;
    height: 80px;
    background-size: cover;
  }
}
</style>
