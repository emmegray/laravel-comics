require('./bootstrap');

import Vue from 'vue'
import Home from './Home.vue'
import HeaderComponent from './components/HeaderComponent'
import FooterComponent from './components/FooterComponent'

Vue.config.productionTip = false

new Vue({
  render: h => h(Home),
}).$mount('#app')

new Vue({
  render: h => h(HeaderComponent),
}).$mount('#header');

new Vue({
  render: h => h(FooterComponent),
}).$mount('#footer');