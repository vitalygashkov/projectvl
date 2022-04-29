<template>
  <div class="about">
    <div class="card wow fadeIn">
      <div class="card__title">О нас</div>
      <div class="card__items">
        <div class="card__item">- Наша команда состоит только из профессионалов и мастеров своего дела</div>
        <div class="card__item">- Не работаем дешево - работаем грамотно</div>
        <div class="card__item">- Мы всегда готовы ответить на все ваши вопросы, подготовить расчет и произвести работы</div>
        <div class="card__item">- Сотрудничаем с физическими и юридическими лицами, любая форма оплаты</div>
        <div class="card__item">- Контроль на всех этапах выполнения работ</div>
        <div class="card__item">P. S. Благодарим за внимание к нашей компании. Если у вас остались какие либо вопросы можете задать их, заказав звонок на сайте или позвонить самим.</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "About"
}
</script>

<style scoped>
.about {
  padding: 200px 40px 0;
  margin: auto;
  width: 1080px;
}
.card__item:last-child {
  font-size: 1.5rem;
  margin-top: 50px;
}
@media (min-width: 1600px) {
  .about {
    padding: 250px 80px 0;
    width: 1300px;
  }
}
@media only screen and (max-width: 600px) {
  .about {
    padding: 90px 15px 0;
    margin: auto;
    width: 100%;
  }
}
</style>
