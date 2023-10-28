<template>

    <h1 class="text-3xl">Add Product</h1>
  
    <form @submit.prevent="onSubmit()">
  
      <div>
        <label for="name">Product name:</label>
        <p v-if="errorMessage" class="text-red-500">{{ errorMessage }}</p>
        <input v-model='formData.name' type="text" id="name" />
      </div>
      <div>
        <label for="price">Product price:</label>
        <p v-if="errorMessage" class="text-red-500">{{ errorMessage }}</p>
        <input v-model='formData.price' type="text" id="price" />
      </div>
      <div>
        <label for="description">Product description:</label>
        <p v-if="errorMessage" class="text-red-500">{{ errorMessage }}</p>
        <input v-model='formData.description' type="text" id="description" />
      </div>
  
      <div>
        <button type="submit">
          submit
        </button>
      </div>
      
    </form>
  
  </template>
  
  <script setup lang="ts">
  
  const formData = ref({
    name: "",
    price: "",
    description: "",
    amount: ""

  })
  const errorMessage = ref("")
  
  async function onSubmit() {
    const { name } = formData.value
    const { price } = formData.value
    const { description } = formData.value
    
    const { data: response, error } = await useMyFetch<any>("products", {
      method: "POST",
      body: { name, price, description}
    })
  
    if (response.value !== null) {
      errorMessage.value = ""
      await navigateTo(`/products`)
    }
    else {
      const { statusMessage, data } = error.value!
      console.log(statusMessage)
      errorMessage.value = data.message
    }
  }
  
  </script>
  