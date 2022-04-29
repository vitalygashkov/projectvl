import Vue from 'vue'
import Router from 'vue-router'

import Home from "./pages/Home";
import Services from "./pages/Services";
import About from "./pages/About";
import Contacts from "./pages/Contacts";

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/services',
      name: 'Services',
      component: Services
    },
    {
      path: '/about',
      name: 'About',
      component: About
    },
    {
      path: '/contacts',
      name: 'Contacts',
      component: Contacts
    }
  ]
})
