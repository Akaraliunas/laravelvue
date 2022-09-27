<template>
    <div class="mx-auto">
        <h1 class="mb-8 text-3xl font-normal text-left font-heading">
            Contacts
        </h1>
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <a class='js-email' href='javascript:void(0)' v-on:click="email('aivaras', 'karaliunas.dev')">Write me an email</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['componentData'],
    methods: {
        email: function (name, domain) {
             window.location.href = 'mailto:' + name + '@' + domain;
        }
    }
}
</script>
