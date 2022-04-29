<template>
  <div class="container" id="order">
    <div class="title wow flipInX" data-wow-delay="0.5s">Заказать наши услуги</div>
    <div class="form">
      <div class="inputs">
        <input type="text" v-model="form.name" placeholder="Имя">
        <input type="text" v-model="form.email" placeholder="Email">
        <input type="text" v-model="form.phone" placeholder="Телефон">
      </div>
      <button @click="submit">{{ submitButtonText }}</button>
      <div class="social">
        <div class="item">
          <img src="https://master-demontazh.ru/templates/destroy/img/icon-phone.png" height="50" alt="">
          <a href="tel:+73422737807">+7 (342) 273-78-07</a>
        </div>
        <div class="item">
          <img src="https://master-demontazh.ru/templates/destroy/img/icon-whatsapp.png" height="50" alt="">
          <a href="tel:+79222406222">+7 (922) 240-62-22</a>
        </div>
        <div class="item">
          <img src="https://master-demontazh.ru/templates/destroy/img/icon-phone.png" height="50" alt="">
          <a href="tel:+79223115016">+7 (922) 311-50-16</a>
        </div>
      </div>
      <div class="social">
        <div class="item">
          <img src="https://master-demontazh.ru/templates/destroy/img/icon-mail.png" height="50" alt="">
          <a href="mailto:proectvl@yandex.ru">proectvl@yandex.ru</a>
        </div>
      </div>
    </div>
<!--    <h1>Наши мастера подробно ответят на все ваши вопросы</h1>-->
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: "SectionOrder",
  data() {
    return {
      submitButtonText: 'Заказать обратный звонок',
      form: {
        name: '',
        email: '',
        phone: ''
      }
    }
  },
  methods: {
    async submit() {
      try {
        await axios.post('/api/send.php', this.form);
        this.submitButtonText = 'Заявка успешно отправлена!';
        this.form.name = '';
        this.form.email = '';
        this.form.phone = '';
      } catch (e) {
        this.submitButtonText = 'Ошибка при отправке заявки!';
      }
    }
  }
}
</script>

<style scoped>
.container {
  text-align: center;
  padding: 20px 0;
  /*height: 100vh;*/
}
.title {
  text-align: center;
  font-size: 52px;
  margin-bottom: 100px;
}
.form {
  background: black;
  border: 3px dashed orangered;
  padding: 60px 20px;
  margin: 50px 200px;
  border-radius: 3px;
}
.inputs {
  display: flex;
  justify-content: space-evenly;
}
input {
  font-size: 18px;
  line-height: 20px;
  padding: 20px;
  outline: none;
  border: none;
  border-radius: 3px;
}
button {
  margin: 30px 0;
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
.social {
  color: white;
  display: flex;
  justify-content: space-evenly;
}
.social:not(:last-child) {
  margin-bottom: 30px;
}
.social .item {
  color: white;
  font-size: 20px;
  text-align: center;
  display: inline-flex;
  align-items: center;
}
.social .item img {
  margin-right: 5px;
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
  .form {
    margin: 30px 10px;
    padding: 30px 25px;
  }
  .inputs {
    display: block;
  }
  input {
    margin-bottom: 20px;
    width: 100%;
  }
  button {
    font-size: 20px;
    width: 100%;
    height: 65px;
    margin: 10px 0;
    background-size: cover;
  }
  .social {
    display: block;
  }
  .social:not(:last-child) {
    margin-bottom: 0;
  }
  .social img {
    height: 35px;
  }
  .social .item {
    font-size: 17px;
    margin-bottom: 10px;
  }
}
</style>
