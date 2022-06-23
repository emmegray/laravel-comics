<footer>
    <div id="shop">
    <div class="container">
    <ul>
      <li v-for="shop in shops" :key="shop.label">
        <a :href="shop.url">
          <img :src="`/img/${shop.src}`"/>
          <span>{{shop.label}}</span>
        </a>
      </li>
    </ul>
    </div>
  </div>

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


    <div id="social">
    <div class="container">
      <a href="#"><button class="btn">SING-UP NOW!</button></a>
      <div class="right">
        <h2>Follow us</h2>
        <ul>
          <li v-for="socialIcons in socialIcons" :key="socialIcons.label">
            <a :href="socialIcons.url">
              <img :src="`/img/${socialIcons.src}`"/>
              </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
