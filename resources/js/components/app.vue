<template>
    <div>
        <div class="container">
            <div class="flex justify-between my-5">
                <div class="uppercase logo">
                    <router-link :to="{ name: 'home' }">Aivaras Karaliūnas</router-link>
                </div>
                <nav class="flex gap-6 ">
                    <router-link :to="{ name: 'home' }"><span>01.</span>Home</router-link>
                    <router-link :to="{ name: 'about' }"><span>02.</span>About me</router-link>
                    <router-link :to="{ name: 'projects' }"><span>03.</span>My Projects</router-link>
                    <router-link :to="{ name: 'contacts' }"><span>04.</span>Contacts</router-link>
                </nav>
            </div>
        </div>

        <div class="container">
            <router-view v-slot="{ Component }">
                <transition name="scale" mode="out-in">
                   <component :is="Component"/>
                 </transition> 
            </router-view>

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

<style lang="scss" >
a {
    font-family: 'Cutive Mono', monospace;
    font-size: 14px;
    font-weight: 700;

    span {
        color: #64ffda;
        margin-right: 6px;
    }

    &.router-link-exact-active {
        color: #64ffda;
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