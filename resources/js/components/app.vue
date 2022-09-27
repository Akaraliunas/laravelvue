<template>
    <div>
        <div class="container relative z-20">
            <div class="flex justify-between my-5">
                <div class="logo">
                    <router-link :to="{ name: 'home' }">Karaliunas.dev</router-link>
                </div>
                <nav class="flex gap-6 menu">
                    <router-link :to="{ name: 'home' }"><span>01.</span>Home</router-link>
                    <router-link :to="{ name: 'about' }"><span>02.</span>About me</router-link>
                    <!-- <router-link :to="{ name: 'projects' }"><span>03.</span>My Projects</router-link> -->
                    <router-link :to="{ name: 'contacts' }"><span>03.</span>Contacts</router-link>
                </nav>
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
                <video autoplay loop src="/videos/programming.mp4"></video>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {

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

        span {
            @apply text-accent-2 mr-2;
        }

        &.router-link-exact-active {
            @apply text-accent-1;
        }
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
