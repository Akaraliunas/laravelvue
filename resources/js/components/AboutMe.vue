<template>
    <div class="p-4 mx-auto bg-white rounded-lg shadow-lg">
        <h1 class="mb-4 text-2xl text-center text-gray-700">
            About me 
        </h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, expedita? Officiis autem, omnis hic similique facere tempora culpa animi quisquam commodi illum sapiente error fugiat? Nobis, architecto? Sapiente, laborum sint!
        </p>

        <div class="asd">{{ componentData }}</div>

        <ul id="list">
            <li v-for="(item,id) in componentData.data" :key="id">
                {{ item }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ['componentData']
}
</script>