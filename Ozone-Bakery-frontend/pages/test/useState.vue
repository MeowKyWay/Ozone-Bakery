<template>
    <div class="flex">
        <UseStateCounter name="One"
            @changeUp="onChangeUp"
            @changeDown="onChangeDown">
        </UseStateCounter>
        <UseStateCounter name="Two"
            @changeUp="onChangeUp"
            @changeDown="onChangeDown">
        </UseStateCounter>
    </div>
    <div>
        message: {{ message }} <br>
        appTheme: {{ appTheme }} <br>
        someKey: {{ someKey }}
    </div>
</template>

<script setup lang="ts">

    import { ref } from 'vue'
    const message = ref("")

    import { useLocalStorage, useSessionStorage } from '@vueuse/core'
    const appTheme = useLocalStorage('app-theme', null)
    const someKey = useSessionStorage<number | null>('somekey', null)

    function onChangeUp(name:string, counter:number){
        message.value = `${name}: change counter up to ${counter}`
        someKey.value = counter
    }
    function onChangeDown(name:string, counter:number){
        message.value = `${name}: change counter down to ${counter}`
        someKey.value = counter
    }
    
</script>   