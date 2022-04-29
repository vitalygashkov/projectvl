<template>
  <div class="container">
    <div class="title wow flipInX" data-wow-delay="0.5s">Демонтаж</div>
    <div class="items">
      <div class="item wow slideInLeft">
        <img src="https://imgpile.com/images/Ir5IXX.png" alt="">
        <span>
          Готовы выполнить демонтажные<br>
          работы любой сложности
        </span>
      </div>
      <div class="item wow slideInRight">
        <img src="https://imgpile.com/images/Ir5uph.png" alt="">
        <span>
          Осуществляем ручной и<br>
          механизированный монтаж
        </span>
      </div>
    </div>
    <div class="items">
      <div class="item wow slideInLeft" data-wow-delay="0.2s">
        <img src="https://imgpile.com/images/IrwyL2.png" alt="">
        <span>
          Имеем все допуски и лицензии<br>
          для выполнения демонтажных работ
        </span>
      </div>
      <div class="item wow slideInRight" data-wow-delay="0.2s">
        <img src="https://imgpile.com/images/Ir54yG.png" alt="">
        <span>
          Уберем и вывезем строительный<br>
          мусор после демонтажа
        </span>
      </div>
    </div>
    <div class="items">
      <div class="item wow fadeInUp" data-wow-delay="0.4s">
        <img src="https://imgpile.com/images/Ir51Da.png" alt="">
        <span>
          Гарантируем 100% соблюдение<br>
          сроков по договору
        </span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SectionDismantling"
}
</script>

<style scoped>
.container {
  padding: 80px 0;
  /*height: 100vh;*/
  background: url("https://imgpile.com/images/ImQYhF.png") no-repeat center;
  background-size: 40%;
}
.title {
  text-align: center;
  font-size: 52px;
  margin-bottom: 100px;
}
.items {
  display: flex;
  text-shadow: #dadada 0 0 3px;
  justify-content: space-around;
  margin: 50px 0;
  text-align: center;
}
.item span {
  display: block;
  font-size: 20px;
  /*margin-top: 20px;*/
  line-height: 30px;
}
.item img {
  height: 160px;
}
@media only screen and (max-width: 600px) {
  .container {
    padding: 0;
    background: none;
  }
  .title {
    margin: 35px 0;
    font-size: 42px;
  }
}
</style>
