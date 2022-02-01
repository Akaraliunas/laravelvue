<template>
    <div class="p-4 mx-auto shadow-lg bg-[#112240]">
        <h1 class="mb-8 text-3xl font-normal text-center font-heading">
            Projects 
        </h1>
        <div class="grid grid-cols-4 gap-6">
            <div class="flex flex-col" v-for="project in projects" :key="project.id">
                <div class="mb-4 font-bold text-md">{{ project.name }}</div>
                <div class="text-sm">{{ project.description }}</div>
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
        this.getProjects()
    }

}
</script>