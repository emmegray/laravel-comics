<template>
  <div id="shop">
    <div class="container">
      <ul>
        <li v-for="shop in shops" :key="shop.label">
          <a :href="shop.url">
            <img :src="`/images/${shop.src}`" />
            <span>{{ shop.label }}</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: `Shop`,
  data: () => ({
    shops: [
      { label: "digital comics", url: "/#", src: "buy-comics-digital-comics.png" },
      { label: "dc merchandise", url: "/#", src: "buy-comics-merchandise.png" },
      { label: "subscription", url: "/#", src: "buy-comics-subscriptions.png" },
      { label: "comic shop locator", url: "/#", src: "buy-comics-shop-locator.png" },
      { label: "dc power visa", url: "/#", src: "buy-dc-power-visa.svg" },
    ]
  })
}
</script>

<style lang="scss" scoped>
@import "../../../sass/vars";

#shop {
  background: $primary-color;
  height: 150px;

  .container {
    height: 100%;
  }

  li {
    height: 50px;

    a {
      height: 100%;
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    img {
      height: 100%;
      margin-right: 20px;
    }

    span {
      color: white;
      font-variant: small-caps;
      margin-right: 20px;
    }
  }

  ul {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
    height: 100%;
  }
}
</style>