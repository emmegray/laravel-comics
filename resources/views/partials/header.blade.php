  <header>
    <div class="container">
      <div class="logo">
        <img src="../assets/img/dc-logo.png" alt="Logo" />
      </div>

      <nav>
        <ul>
          <li v-for="link in links" :key="link.url">
            <a :href="link.url">{{link.label}}</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
