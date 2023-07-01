<template>
    <div>
        <div class="container relative z-[99]">
            <div class="flex items-center justify-between my-5">
                <div class="logo">
                    <router-link :to="{ name: 'home' }">Karaliunas.dev</router-link>
                </div>
                <nav class="flex gap-6 menu js-menu">
                    <router-link :to="{ name: 'home' }" v-on:click="toggleBurger()"><span>01.</span>Home</router-link>
                    <router-link :to="{ name: 'about' }" v-on:click="toggleBurger()"><span>02.</span>About me</router-link>
                    <!-- <router-link :to="{ name: 'projects' }" v-on:click="toggleBurger()"><span>03.</span>My Projects</router-link> -->
                    <!-- <router-link :to="{ name: 'contacts' }" v-on:click="toggleBurger()"><span>03.</span>Contacts</router-link> -->
                </nav>

                <div class="hidden tham tham-e-squeeze tham-w-8 md:flex" v-on:click="toggleBurger()">
                    <div class="tham-box">
                        <div class="tham-inner bg-accent-2" />
                    </div>
                </div>

            </div>
        </div>

        <div class="container relative z-40 py-10 " :class="{ 'pointer-events-none': $route.path === '/' }">
            <router-view v-slot="{ Component }">
                <transition name="scale" mode="out-in">
                   <component :is="Component"/>
                 </transition>
            </router-view>

        </div>
        <div class="bg">
            <div class="overlay bg-[#262c32] opacity-[0.95] z-[11] fixed top-0 left-0 w-full h-full pointer-events-none"></div>
            <div class="fixed top-0 left-0 w-full h-full z-[12]">
                <Particles
                    id="tsparticles"
                    :options="particlesOptions"
                    :particlesInit="particlesInit"
                />
            </div>
        </div>
    </div>
</template>

<script>
import { loadFull } from "tsparticles";
import particlesJson from '../particles/particles.js';

export default {
    data() {
        return {
            particlesInit: async (engine) => {
                await loadFull(engine);
            },
            particlesOptions: particlesJson,
        }
    },
    methods: {
        toggleBurger: function (event) {
            if (document.querySelectorAll('.tham.tham-e-squeeze').length > 0) {
                document.querySelector('.tham.tham-e-squeeze').classList.toggle('tham-active');
            }
            if (document.querySelectorAll('.js-menu').length > 0) {
                document.querySelector('.js-menu').classList.toggle('active');
            }
        }
    },
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
</style>
