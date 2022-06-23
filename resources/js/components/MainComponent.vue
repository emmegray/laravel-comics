<template>
  <main>
    <img src="../assets/img/jumbotron.jpg" alt="Jumbotron" />
    <div class="container">
      <div class="jumbotron">
        <h2>Current series</h2>
        <slot></slot>
        <h4>Load more</h4>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  name: `MainComponent`
}
</script>

<style lang="scss" scoped>
@import "../../sass/_vars";

main {
  color: white;
  background-color: $bg-dark;

  img {
    overflow: hidden;
    width: 100%;
    height: 600px;
    object-fit: cover;
    object-position: center 0px;
    cursor: pointer;
  }

  .container {
    margin: 0 auto;

    .jumbotron {
      padding: 40px 0 20px 0;
      position: relative;
      display: block;

      h2 {
        position: absolute;
        top: -30px;
        background: $primary-color;
        padding: 10px 20px;
        text-transform: uppercase;
        cursor: pointer;
      }

      h4 {
        text-align: center;
        background: $primary-color;
        padding: 10px 20px;
        text-transform: uppercase;
        cursor: pointer;
      }
    }
  }
}
</style>