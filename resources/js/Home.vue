<template>
  <div id="app">
    <MainComponent>
      <GridComponent>
        <SeriesComponent v-for="serie in series" :cover="serie.image" :title="serie.title" :key="serie.title" />
      </GridComponent>
    </MainComponent>
  </div>
</template>

<script>
import MainComponent from './components/MainComponent.vue'
import SeriesComponent from './components/SeriesComponent.vue'
import GridComponent from './components/GridComponent.vue'

export default {
  name: 'Home',
  components: {
    MainComponent,
    SeriesComponent,
    GridComponent
  },
  data: () => ({
    series: [],
  }),
  mounted: function () {
    fetch("/api/comics")
      .then(res => res.json())
      .then(series => {
        this.series = series;
      })
  }
}
</script>

<style lang="scss">
#app {
  width: 100%;
}
</style>
