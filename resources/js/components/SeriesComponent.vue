<template>
  <div class="series">
    <img :src="`${cover}`" />
    <h4 class="title">{{ title }}</h4>
  </div>
</template>

<script>
export default {
  name: "SeriesComponent",
  props: {
    cover: String,
    title: String,
  }
}
</script>

<style lang="scss" scoped>
.series {
  img {
    width: 100%;
    margin-bottom: 10px;
    object-fit: cover;
    aspect-ratio: 1/1;
    object-position: center 0px;
    cursor: pointer;
  }

  .title {
    text-transform: uppercase;
    font-variant: small-caps;
    color: lightgrey;
    cursor: pointer;
  }
}
</style>