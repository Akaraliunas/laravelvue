<template>
    <div>
        <div class="container relative z-[21]">
            <div class="flex items-center justify-between my-5">
                <div class="logo">
                    <router-link :to="{ name: 'home' }">Karaliunas.dev</router-link>
                </div>
                <nav class="flex gap-6 menu js-mobile-menu">
                    <router-link :to="{ name: 'home' }" v-on:click="toggleBurger($event)"><span>01.</span>Home</router-link>
                    <router-link :to="{ name: 'about' }" v-on:click="toggleBurger($event)"><span>02.</span>About me</router-link>
                    <!-- <router-link :to="{ name: 'projects' }"><span>03.</span>My Projects</router-link> -->
                    <router-link :to="{ name: 'contacts' }" v-on:click="toggleBurger($event)"><span>03.</span>Contacts</router-link>
                </nav>

                <div class="tham tham-e-squeeze tham-w-8" v-on:click="toggleBurger($event)">
                    <div class="tham-box">
                        <div class="tham-inner bg-accent-2" />
                    </div>
                </div>

            </div>
        </div>

        <div class="container relative z-20 py-10">
            <router-view v-slot="{ Component }">
                <transition name="scale" mode="out-in">
                   <component :is="Component"/>
                 </transition>
            </router-view>

        </div>
        <div class="bg" v-if="$route.path === '/'">
            <div class="overlay bg-dark-1 opacity-70 z-[15] fixed top-0 left-0 w-full h-full"></div>
            <div class="fixed top-0 left-0 z-10 w-full h-full">
                <video class="md:min-w-fit" autoplay loop src="/videos/programming.mp4"></video>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {

        }
    },
    methods: {
        toggleBurger: function (event) {
            event.currentTarget.classList.toggle('tham-active');

            if (document.querySelectorAll('.js-mobile-menu').length > 0) {
                document.querySelector('.js-mobile-menu').classList.toggle('active');
            }
        }
    }
}
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

.js-mobile-menu {
    @apply opacity-0 pointer-events-none;
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
</style>
