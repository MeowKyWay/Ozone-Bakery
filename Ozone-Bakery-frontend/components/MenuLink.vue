<template>
    
    <NuxtLink 
        class="px-2 py-2 mx-2 my-2 text-black font-size-md"
        :to="to">
        <slot/>
    </NuxtLink>

</template>

<script setup lang="ts">

const props = defineProps( ['to', 'title'] )

</script>