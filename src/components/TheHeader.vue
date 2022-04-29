<template>
  <header>
    <div class="header">
      <div class="menu__toggler" @click="menuToggle">
        <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg>
      </div>
      <nav class="menu__mobile" :class="{ 'is-open': isMenuOpen }"  id="menu__mobile">
        <ul>
          <li @click="menuToggle">
            <router-link to="/">Главная</router-link>
          </li>
          <li @click="menuToggle">
            <router-link to="/services">Наши услуги</router-link>
          </li>
          <li @click="menuToggle">
            <router-link to="/about">О нас</router-link>
          </li>
          <li @click="menuToggle">
            <router-link to="/contacts">Контакты</router-link>
          </li>
          <li @click="menuToggle">
            <router-link to="/" v-scroll-to="'#order'">Оставить заявку</router-link>
          </li>
        </ul>
      </nav>
      <div class="header__logo">
        <img src="../assets/logo/white.png" height="60">
      </div>
      <div class="header__contacts">
        <div class="header__contacts-item">
          <a href="tel:+73422737807"><img src="https://master-demontazh.ru/templates/destroy/img/icon-phone.png" height="40" alt=""></a>
          <a class="text" href="tel:+73422737807">+7 (342) 273-78-07</a>
        </div>
        <div class="header__contacts-item">
          <a href="tel:+79222406222"><img src="https://master-demontazh.ru/templates/destroy/img/icon-whatsapp.png" height="40" alt=""></a>
          <a class="text" href="tel:+79222406222">+7 (922) 240-62-22</a>
        </div>
        <div class="header__contacts-item">
          <a href="tel:+79223115016"><img src="https://master-demontazh.ru/templates/destroy/img/icon-phone.png" height="40" alt=""></a>
          <a class="text" href="tel:+79223115016">+7 (922) 311-50-16</a>
        </div>
        <div class="header__contacts-item">
          <a href="mailto:proectvl@yandex.ru"><img src="https://master-demontazh.ru/templates/destroy/img/icon-mail.png" height="40" alt=""></a>
          <a class="text" href="mailto:proectvl@yandex.ru">proectvl@yandex.ru</a>
        </div>
      </div>
    </div>
    <div class="menu">
      <router-link class="menu__item" to="/">Главная</router-link>
      <router-link class="menu__item" to="/services">Наши услуги</router-link>
      <router-link class="menu__item" to="/about">О нас</router-link>
      <router-link class="menu__item" to="/contacts">Контакты</router-link>
      <router-link class="menu__item menu__button" to="/" v-scroll-to="'#order'">Оставить заявку</router-link>
    </div>
  </header>
</template>

<script>
export default {
  name: 'TheHeader',
  data() {
    return {
      isMenuOpen: false
    }
  },
  methods: {
    menuToggle() {
      console.log('toggled');
      this.isMenuOpen = !this.isMenuOpen;
    }
  }
}
</script>

<style scoped>
header {
  position: absolute;
  height: 200px;
  width: 100vw;
  background: url('../assets/header.png');
  z-index: 1;
}
.header {
  /*padding: 5px 180px;*/
  max-width: 1080px;
  height: 80px;
  margin: auto;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.header__logo {
  margin-left: 5%;
  transition: .4s;
}
.header__logo:hover {
  transform: scale(1.2);
}
.header__contacts-item {
  display: inline-flex;
  align-items: center;
  /*font-weight: 600;*/
  font-size: 15px;
  transition: .4s;
  margin: 10px 0 10px 20px;
}
.header__contacts-item:hover {
  color: orange;
  transform: scale(1.15);
}
.menu__toggler {
  display: none;
  cursor: pointer;
  z-index: 200;
}
.menu {
  height: 165px;
  max-width: 1080px;
  margin: auto;
  background: url('../assets/menu.png') no-repeat center;
  background-size: contain;
  display: flex;
  justify-content: space-evenly;
  /*padding: 0 130px;*/
  transition: .5s;
}

.menu__mobile {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  text-align: center;
  /*background: transparent;*/
  opacity: 0;
  z-index: -1;
  visibility: hidden;
  transition: all .375s;
  height: 100vh;
}

.menu__mobile.is-open {
  opacity: .97;
  z-index: 100;
  visibility: visible;
}

/* Yellow band effect */
.menu__mobile::before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: -15px;
  background: #FEDC2A;
  transform-origin: 0 0;
  transform: skew(-14deg) translateX(-120%);
  transition: all .275s .1s;
}

.menu__mobile.is-open::before {
  transform: skew(-14deg) translateX(0);
}

/* Skewing effect on menu links */
.menu__mobile ul {
  display: inline-flex;
  flex-direction: column;
  height: 93%; /* Should be 100%, but we have a notice message :D */
  align-items: flex-end;
  justify-content: center;
  transform: translateX(-18%) skew(-16deg);
}

.menu__mobile li {
  display: block;
  margin: .5rem 0;
  text-align: right;
  transform: skew(16deg);
}

/* Apparition effect on links */
.menu__mobile a {
  opacity: 0;
  transform: translateY(-10px);
}

.menu__mobile.is-open a {
  opacity: 1;
  transform: translateY(0);
}
.menu__mobile li:nth-child(1) a {
  transition: all 275ms 175ms
}
.menu__mobile li:nth-child(2) a {
  transition: all 275ms 225ms
}
.menu__mobile li:nth-child(3) a {
  transition: all 275ms 275ms
}
.menu__mobile li:nth-child(4) a {
  transition: all 275ms 325ms
}
.menu__mobile li:nth-child(5) a {
  transition: all 275ms 375ms
}


/* Decoration */
.menu__mobile ul,
.menu__mobile li {
  list-style: none;
  padding: 0;
}
.menu__mobile a {
  display: block;
  padding: 12px 0;
  color: #000000;
  font-size: 1.4em;
  text-decoration: none;
  font-weight: bold;
}
.menu__item {
  cursor: pointer;
  height: fit-content;
  text-transform: uppercase;
  font-size: 20px;
  font-weight: 400;
  margin-top: 5px;
  /*margin-bottom: 100px;*/
  padding: 14px 20px;
  border: 3px dashed transparent;
  transition: .23s;
}
.menu__item:hover {
  /*font-weight: 800;*/
  transform: scale(1.2);
  color: orange;
  border: 3px dashed orange;
  background: black;
  background-size: contain;
}
.menu__button {
  color: white;
  font-weight: 400;
  background: url('../assets/button-brown.png') no-repeat center;
  background-size: contain;
}
@media (min-width: 1600px) {
  .header__logo {
    margin-left: 8%;
  }
  .header {
    max-width: 1300px;
  }
  .menu {
    height: 200px;
    max-width: 1300px;
  }
  .menu__item {
    margin-top: 10px;
  }
}
@media only screen and (max-width: 600px) {
  header {
    position: fixed;
    height: 100px;
    background-size: contain;
  }
  .header {
    padding: 15px;
  }
  .menu__toggler {
    display: flex;
    margin-right: 10px;
    color: white;
  }
  .header__logo {
    margin-left: 0;
  }
  .header__logo img {
    height: 40px;
  }
  .menu {
    background-size: 250%;
    display: none;
  }
  .header__contacts-item .text {
    display: none;
  }

}
</style>
