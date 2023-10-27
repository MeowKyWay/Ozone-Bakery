<template>
  <div class="flex h-screen bg-black-700">
    <div class="w-full max-w-xs m-auto bg-indigo-100 rounded p-5">   
      <header>
        <img class="w-20 mx-auto mb-5" src="https://img.icons8.com/fluent/344/year-of-tiger.png" />
      </header>   
      <form @submit.prevent="onSubmit">
        <div>
          <label for="email" class="block mb-2 text-indigo-500">Email</label>
          <input v-model="formData.email" placeholder="email@example.com" id="email" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" type="text" name="email">
        </div>
        <div>
          <label for="password" class="block mb-2 text-indigo-500">Password</label>
          <input v-model="formData.password" id="password" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" type="password" name="password">
        </div>
        <div>          
          <button @click="onSubmit()" class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded" type="submit">Login</button>
        </div>       
      </form>  
    </div>
  </div>
</template>

<script setup lang="ts">
import { useAuthStore } from '~/stores/useAuthStore';
const auth = useAuthStore()

const formData = reactive({
  'email': '',
  'password': ''
})

async function onSubmit() {
  const { data: response, error } = await useMyFetch<any>('auth/login', {
    method: 'POST',
    body: formData
  })
  if (response.value !== null){
    const { access_token, token_type } = response.value
    auth.setNewToken(access_token)

    const { data: user, error } = await useMyFetch<any>('auth/me', {
      method: 'POST'
    })
    if (user.value !== null) {
      const { name, email } = user.value
      auth.setUser(name, email)
      await navigateTo('/playlist')
    }
  }
}
</script>