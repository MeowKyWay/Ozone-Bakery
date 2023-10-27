<template>

    <div class="my-4 p-8 bg-white text-black">

        <div class="text-2xl">{{ name }}</div>
        <div class="text-xl">{{ counter.number }}</div>

        <button class="p-4 mx-8" @click="up()">
            Up
        </button>
        <button class="p-4 mx-8" @click="down()">
            Down
        </button>

    </div>

</template>

<script setup lang="ts">

const props = defineProps(['name'])
const counter = reactive({number: 0})

function up() {
    counter.number += 1
}
function down() {
    counter.number -= 1
}

</script>