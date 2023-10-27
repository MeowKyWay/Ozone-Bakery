<template>
  <div class="bg-white overflow-hidden shadow sm:rounded-lg flex">
    <div class="px-4 py-5 sm:p-6">
      <dl>
        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
          {{ name }}
        </dt>
        <dd class="mt-1 text-3xl leading-9 font-semibold text-indigo-600">
          {{ counter.count }}
        </dd>
      </dl>
    </div>
    <div class="flex flex-col items-end gap-3 pr-3 py-3 mt-4">
      <button @click="up()">
        <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
        </svg>
      </button>
      <button @click="down()">
        <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>
      </button>
    </div>
  </div>
</template>

<script setup lang="ts">

import { useCounterStore } from '~/stores/useCounterStore'
const counter = useCounterStore()
const props = defineProps(['name'])

function up() {
  counter.increment()
}

function down() {
  counter.decrement()
}

</script>