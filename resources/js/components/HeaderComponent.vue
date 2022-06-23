<template>
  <header>
    <div class="container">
      <div class="logo">
        <img src="../assets/img/dc-logo.png" alt="Logo" />
      </div>

      <nav>
        <ul>
          <li v-for="link in links" :key="link.url">
            <a :href="link.url">{{ link.label }}</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
</template>

<script>
export default {
  name: `HeaderComponent`,
  data: () => ({
    links: [
      { label: "characters", url: "/characters" },
      { label: "comics", url: "/comics" },
      { label: "movies", url: "/movies" },
      { label: "tv", url: "/tv" },
      { label: "games", url: "/games" },
      { label: "videos", url: "/videos" },
      { label: "news", url: "/news" },
      { label: "shop", url: "/shop" },
    ]
  })
};
</script>

<style lang="scss" scoped>
@import "../../sass/_vars";
@import "../../sass/_utilis";

header {
  background-color: #fff;
  box-sizing: content-box;
  height: 115px;
  overflow: visible;
  width: 100%;

  .container {
    display: flex;
  }

  .logo {
    line-height: 115px;
    position: relative;
    width: 81px;

    img {
      height: 81px;
      vertical-align: middle;
      width: 81px;
    }
  }

  nav {
    min-height: 115px;
    margin-left: auto;
    margin-right: auto;
  }

  ul {
    display: flex;
    align-items: center;
    list-style: none;
    height: 100%;
    justify-content: flex-end;
    flex-wrap: wrap;

    li {
      margin-right: 20px;
      position: relative;
      height: 100%;
      display: flex;
      align-items: center;

      &:hover {
        border-bottom: 5px solid $primary-color;
        padding-top: 5px;
      }

      a {
        color: #464646;
        display: block;
        text-transform: uppercase;
        font-size: 20px;
        display: inline-block;
        font-weight: bolder;

        &:hover {
          color: $primary-color;
        }
      }
    }
  }
}
</style>