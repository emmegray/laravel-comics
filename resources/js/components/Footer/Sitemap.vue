<template>
  <div id="sitemap">
    <div class="container">
      <div class="list" v-for="list in lists" :key="list.title">
        <h2>{{ list.title }}</h2>
        <ul>
          <li v-for="link in list.links" :key="link.url">
            <a :href="link.url">{{ link.label }}</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import sitemaps from "../../assets/sitemaps.json"

export default {
  name: `Sitemap`,
  data: () => ({
    lists: sitemaps,
  }),
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_vars";

#sitemap {
  background-image: url(../../assets/img/footer-bg.jpg);
  background-position: top center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 400px;
  display: flex;

  .container {
    background-image: url(../../assets/img/dc-logo-bg.png);
    background-position: right center;
    background-repeat: no-repeat;
    display: flex;
    flex-wrap: wrap;
    align-content: baseline;
    flex-direction: column;

    div:nth-child(n + 3) {
      height: 100%;
    }
  }

  h2 {
    color: white;
    font-variant: small-caps;
    text-transform: lowercase;
    padding: 10px 0;
    margin-top: 20px;
    padding-right: 30px;
  }

  ul {
    padding-right: 30px;
  }

  a {
    font-size: small;
    color: #696969;

    &:hover {
      color: lightgrey;
    }
  }
}
</style>