<template>

    <h1>
        
        {{ pageTitle }}

    </h1>

    <div class="text-3xl mx-4">
        {{ product.name }}
    </div>

    <div class="text-3xl mx-4">
        {{ product.price }}
    </div>

</template>

<script setup lang="ts">

const route = useRoute()
const config = useRuntimeConfig()
const pageTitle = `Product no. ${route.params.id}`
const { data:product } = await useMyFetch<any>(`products/${route.params.id}`, {})

</script>