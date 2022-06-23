require('./bootstrap');

import Vue from 'vue'
import Home from './Home.vue'
import About from './About.vue'
import Contact from './Contact.vue'
import HeaderComponent from './components/HeaderComponent'
import FooterComponent from './components/FooterComponent'

Vue.config.productionTip = false

new Vue({
  render: h => h(Home),
}).$mount('#app');

new Vue({
  render: h => h(HeaderComponent),
}).$mount('#header');

new Vue({
  render: h => h(FooterComponent),
}).$mount('#footer');

new Vue({
  render: h => h(About),
}).$mount('#app-about');

new Vue({
  render: h => h(Contact),
}).$mount('#app-contact');