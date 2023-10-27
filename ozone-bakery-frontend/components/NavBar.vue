<template>
    
    <nav class="bg-white border-gray-200 py-1 flex justify-between items-center">
      <a href="#" class="flex items-center ml-5 text-black">
        <img src="https://icons.veryicon.com/png/o/food--drinks/sweet-dessert-icon/croissant-18.png" class="h-6 mr-3 sm:h-9" alt="Logo">
        <span class="self-center text-1xl font-semibold whitespace-nowrap">Ozone Bakery</span>
    </a>
    <div class="flex">
        <MenuLink to="/">Home</MenuLink>
        <MenuLink to="/products">Products</MenuLink>
        <MenuLink to="/products/create">Add Product</MenuLink>
    </div>
    <div class="flex ">
        <MenuLink v-if="!auth.isLogin" to="/login" class="ml-auto">Login</MenuLink>

        <div v-if="auth.isLogin">
            {{ auth.user.name }}
            <button @click="logout">Logout</button>
          </div>
          

    </div>
    </nav>

</template>

<script setup lang="ts">

import { useAuthStore } from '~/stores/useAuthStore';

const auth = useAuthStore()
const logout = () => {
  auth.logout(); 
};

</script>
