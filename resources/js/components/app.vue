<template>
  <div>
    <div class="container relative z-[99]">
      <div class="flex items-center justify-between my-5">
        <div class="logo">
          <router-link :to="{ name: 'home' }">Karaliunas.dev</router-link>
        </div>
        <nav class="flex gap-6 menu js-menu">
          <router-link
            :to="{ name: 'home' }"
            v-on:click="toggleBurger()"
          ><span>01.</span>Home</router-link>
          <router-link
            :to="{ name: 'about' }"
            v-on:click="toggleBurger()"
          ><span>02.</span>About me</router-link>
          <!-- <router-link :to="{ name: 'projects' }" v-on:click="toggleBurger()"><span>03.</span>My Projects</router-link> -->
          <!-- <router-link :to="{ name: 'contacts' }" v-on:click="toggleBurger()"><span>03.</span>Contacts</router-link> -->
        </nav>

        <div
          class="hidden tham tham-e-squeeze tham-w-8 md:flex"
          v-on:click="toggleBurger()"
        >
          <div class="tham-box">
            <div class="tham-inner bg-accent-2" />
          </div>
        </div>

      </div>
    </div>

    <div class="container relative z-40 py-10 ">

      <router-view v-slot="{ Component }">
        <transition
          name="scale"
          mode="out-in"
        >
          <component :is="Component" />
        </transition>
      </router-view>

      <vue-progress-bar></vue-progress-bar>

    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    toggleBurger: function (event) {
      if (document.querySelectorAll(".tham.tham-e-squeeze").length > 0) {
        document
          .querySelector(".tham.tham-e-squeeze")
          .classList.toggle("tham-active");
      }
      if (document.querySelectorAll(".js-menu").length > 0) {
        document.querySelector(".js-menu").classList.toggle("active");
      }
    },
  },
  mounted() {
    this.$Progress.finish();
  },
  created() {
    this.$Progress.start();
    this.$router.beforeEach((to, from, next) => {
      if (to.meta.progress !== undefined) {
        let meta = to.meta.progress;
        this.$Progress.parseMeta(meta);
      }
      this.$Progress.start();
      next();
    });
    this.$router.afterEach((to, from) => {
      this.$Progress.finish();
    });
  },
};
</script>

<style lang="postcss" scoped>
.logo {
  a {
    @apply font-heading font-medium text-xl;
  }
}

.menu {
  a {
    @apply font-heading text-sm font-medium;
    @apply md:text-center md:text-2xl;

    span {
      @apply text-accent-2 mr-2;
    }

    &.router-link-exact-active {
      @apply text-accent-1;
    }
  }
}

.js-menu {
  @apply md:opacity-0 md:pointer-events-none;
  @apply md:fixed md:left-0 md:top-0 md:w-full md:h-full md:bg-dark-1 md:flex md:flex-col md:pt-28 md:z-30;

  &.active {
    @apply opacity-100 pointer-events-auto;
  }
}

.tham {
  &-active {
    @apply z-[99];
  }
}

.scale-enter-active,
.scale-leave-active {
  transition: all 0.5s ease;
}

.scale-enter-from,
.scale-leave-to {
  opacity: 0;
  transform: scale(0.9);
}

.overlay-down-full-enter ~ .overlay-top {
  height: 100vh;
}

.overlay-down-full-enter-to ~ .overlay-bottom {
  height: 0;
}

.overlay-down-full-enter-active ~ .overlay-top,
.overlay-down-full-leave-active ~ .overlay-top {
  height: 100vh;
}

.overlay-down-full-enter-active ~ .overlay-top {
  transition-timing-function: ease-in;
}

.overlay-down-full-leave-active ~ .overlay-bottom {
  transition-timing-function: ease;
}

.overlay-down-full-enter-active,
.overlay-down-full-leave-active {
  transition-duration: var(--transition-duration);
}
.overlay-down-full-enter-active ~ .overlay-top,
.overlay-down-full-enter-to ~ .overlay-top {
  display: none;
}

.overlay-down-full-enter ~ .overlay-bottom,
.overlay-down-full-enter-active ~ .overlay-bottom,
.overlay-down-full-enter-to ~ .overlay-bottom {
  transition-duration: unset !important;
  height: 100vh;
}
</style>
