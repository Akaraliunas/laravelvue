<template>
    <div class="p-4 mx-auto bg-white rounded-lg shadow-lg">
        <h1 class="mb-4 text-2xl text-center text-gray-700">
            Projects 
        </h1>
        <div class="grid grid-cols-4">
            <div class="flex flex-col" v-for="(item,id) in componentData.projects.data" :key="id">
                <div class="font-bold">{{ item.name }}</div>
                <div class="">{{ item.description }}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['componentData']
}
</script>