<template>
  <div class="container">
    <img class="fade_bg" src="https://master-demontazh.ru/wp-content/uploads/2021/06/l4-bg-t.png" alt="">
    <div class="title wow flipInX" data-wow-delay="0.3s">Почему именно мы?</div>
    <div class="row">
      <div class="item wow fadeInLeft" data-wow-delay="0.3s">
        <img src="https://imgpile.com/images/IlLk2r.png" height="120" class="wow pulse" data-wow-delay="1s" alt="">
        <span>Опытная<br>команда</span>
      </div>
      <div class="item wow fadeInLeft">
        <img src="https://imgpile.com/images/IlLLIh.png" height="120" class="wow pulse" data-wow-delay="2s" alt="">
        <span>Оперативность</span>
      </div>
      <div class="item wow fadeInRight">
        <img src="https://imgpile.com/images/IlL2WX.png" height="120" class="wow pulse" data-wow-delay="3s" alt="">
        <span>Гибкость<br>и индивидуальный подход</span>
      </div>
      <div class="item wow fadeInRight" data-wow-delay="0.3s">
        <img src="https://imgpile.com/images/IlLOKE.png" height="120" class="wow pulse" data-wow-delay="4s" alt="">
        <span>Контроль<br>и безопасность</span>
      </div>
    </div>
    <div class="row descriptions">
      <div class="item item__description wow fadeInUp" data-wow-delay="0.5s">
        <span>Наша команда состоит только из профессионалов и мастеров своего дела</span>
      </div>
      <div class="item item__description wow fadeInUp" data-wow-delay="0.5s">
        <span>Мы всегда готовы ответить на все ваши вопросы, подготовить расчет и произвести работы</span>
      </div>
      <div class="item item__description wow fadeInUp" data-wow-delay="0.5s">
        <span>Сотрудничаем с физическими и юридическими лицами, любая форма оплаты</span>
      </div>
      <div class="item item__description wow fadeInUp" data-wow-delay="0.5s">
        <span>Контроль на всех этапах выполнения работ</span>
      </div>
    </div>
    <button data-wow-delay="1s" v-scroll-to="'#order'">Получить консультацию бесплатно</button>
  </div>
</template>

<script>
export default {
  name: "SectionAdvantages"
}
</script>

<style scoped>
.container {
  position: relative;
  /*background: url("https://master-demontazh.ru/templates/g5_destroy/images/l2/bg.jpg") no-repeat center;*/
  background: url('../assets/background.jpg');
  /*background-size: cover;*/
  /*color: white;*/
  text-align: center;
  padding: 50px 0;
  /*height: 100vh;*/
}
.title {
  text-align: center;
  font-size: 52px;
  margin: 80px 0;
}
.row {
  /*color: black;*/
  text-align: center;
  display: flex;
  justify-content: space-evenly;
  margin-bottom: 35px;
}
.item {
  width: 300px;
}
.item img {
  margin-bottom: 25px;
}
.item span {
  display: block;
  font-size: 24px;
  line-height: 25px;
}
.item__description span {
  font-size: 20px;
  color: darkred;
}
button {
  margin: 60px 0;
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
.fade_bg {
  position: absolute;
  top: -175px;
  left: 0;
  width: 100%;
  height: 175px;
  transform: rotate( 180deg );
}
@media only screen and (max-width: 600px) {
  .container {
    padding: 0;
  }
  .fade_bg {
    position: absolute;
    top: -125px;
    left: 0;
    width: 100%;
    height: 50px;
  }
  .title {
    font-size: 42px;
  }
  .row {
    display: block;
  }
  .item {
    width: 100%;
    margin-bottom: 50px;
  }
  .descriptions {
    display: none;
  }
  button {
    font-size: 18px;
    width: 100%;
    height: 80px;
    background-size: cover;
  }
}
</style>
