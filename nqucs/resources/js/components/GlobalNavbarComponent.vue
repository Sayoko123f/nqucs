<template>
  <nav
    class="navbar navbar-expand-md bg-light navbar-light"
    :class="{ 'fixed-top': isFixedTop }"
    :style="styleObject"
  >
    <a class="navbar-brand" href="#"><img :src="imgsPath[1]" alt="Logo" /></a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarCollapse"
      aria-controls="navbarCollapse"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!-- Left Side Of Navbar -->
      <!-- <ul class="navbar-nav mr-auto">
      <li>
        <a class="nav-link" href="#">Index</a>
      </li>
    </ul> -->
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LinkLink</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LinkLink</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LinkLink</a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  data: () => ({
    imgsPath: Object,
    isFixedTop: false,
    styleObject: {
      display: "none",
    },
  }),
  props: {
    imgs: String,
  },
  mounted() {
    console.log("NavbarComponent mounted.");
    this.imgsPath = JSON.parse(this.imgs);
    let self = this;
    /* Scroll event */
    window.addEventListener(
      "scroll",
      () => {
        let scrollTop =
          document.documentElement.scrollTop || document.body.scrollTop || 0;
        console.log(scrollTop);
        if (scrollTop > 80) {
          self.isFixedTop = true;
          self.styleObject.display = null;
        } else {
          self.isFixedTop = false;
          self.styleObject.display = "none";
        }
      },
      true
    );
  },
};
</script>

<style>
</style>