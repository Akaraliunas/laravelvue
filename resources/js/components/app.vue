<template>
    <div>
        <div class="container">
            <div class="flex justify-between my-3">
                <div class="logo">
                    Aivaras karaliūnas
                </div>
                <nav class="">
                    <router-link :to="{ name: 'Home' }">Home</router-link> |
                    <router-link :to="{ name: 'About' }">About me</router-link>
                </nav>
            </div>
        </div>

        <div class="container">
            <router-view v-slot="{ Component }" :componentData='componentInfo'>
                <transition name="scale" mode="out-in">
                   <component :is="Component"/>
                 </transition> 
            </router-view>
        </div>
    </div>
</template>

<script>
export default {
    props: ['controllerInfo'],
    data(){
        return {
            'componentInfo': this.controllerInfo
        }
    },
    mounted() {
        
}
}
</script>

<style lang="scss" >
a {
    &.router-link-exact-active {
        color: red;
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