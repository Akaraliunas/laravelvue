<template>
    <div class="mx-auto">
        <h1 class="mb-8 text-3xl font-normal text-left font-heading">
            Projects
        </h1>
        <div class="grid grid-cols-3 gap-6 sm:grid-cols-2 xs:grid-cols-1">
            <div class="flex flex-col" v-for="project in projects" :key="project.id">
                <a :href="project.link" target="_blank">
                    <div class="mb-4 font-bold text-md">{{ project.name }}</div>
                    <img :src="'/image/'+project.image" alt="">
                    <div class="text-sm">{{ project.description }}</div>
                </a>
            </div>
        </div>

    </div>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            projects: {},
        }
    },
    methods: {
        getProjects(){
            axios.get('/api/getProjects')
                .then((response)=>{
                    this.projects = response.data
                })
        }
    },
    created() {
        this.getProjects();
    }

}
</script>
