<template>
  <footer>
    <Shop></Shop>
    <Sitemap></Sitemap>
    <Socials></Socials>
  </footer>
</template>

<script>
import Shop from "./Footer/Shop.vue";
import Sitemap from "./Footer/Sitemap.vue";
import Socials from "./Footer/Socials.vue";
export default {
  name: `FooterComponent`,
  components: { Shop, Sitemap, Socials }
}
</script>

<style lang="scss" scoped>
@import "../../sass/_vars";

footer {
  width: 100%;
}
</style>