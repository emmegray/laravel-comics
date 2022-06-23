<template>
  <div id="social">
    <div class="container">
      <a href="#"><button class="btn">SING-UP NOW!</button></a>
      <div class="right">
        <h2>Follow us</h2>
        <ul>
          <li v-for="socialIcons in socialIcons" :key="socialIcons.label">
            <a :href="socialIcons.url">
              <img :src="`/images/${socialIcons.src}`" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: `Social`,
  data: () => ({
    socialIcons: [
      { label: "facebook", url: "/#", src: "footer-facebook.png" },
      { label: "twitter", url: "/#", src: "footer-twitter.png" },
      { label: "youtube", url: "/#", src: "footer-youtube.png" },
      { label: "pinterest", url: "/#", src: "footer-pinterest.png" },
      { label: "periscope", url: "/#", src: "footer-periscope.png" },
    ]
  })
}
</script>

<style lang="scss" scoped>
@import "../../../sass/_vars";

#social {
  background-color: $bg-gray;
  text-transform: uppercase;
  padding: 20px;

  .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }

  button {
    background-color: transparent;
    color: white;
    justify-self: flex-start;

    &:hover {
      background: #0282F9;
    }
  }

  .right {
    display: flex;
    align-items: center;
  }

  h2 {
    color: $primary-color;
    margin-right: 20px;
  }

  h2,
  ul {
    justify-self: flex-end;
    display: inline-block;
  }

  li {
    display: inline-block;
    margin-right: 10px;
  }
}
</style>