<template>
  <div id="app app-about">
    <MainComponent>
      <h1>About</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis accusamus, similique magnam accusantium quos
        minima, dolorum repellendus consequatur nam dicta, nulla veniam! Veniam quaerat quos doloribus officiis nulla
        non adipisci?</p>
    </MainComponent>
  </div>
</template>

<script>
import MainComponent from './components/MainComponent.vue'

export default {
  name: 'About',
  components: {
    MainComponent,
  }
}
</script>

<style lang="scss">
#app {
  width: 100%;
}
</style>
