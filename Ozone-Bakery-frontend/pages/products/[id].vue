<template>
  <!-- Card Section -->
  <div class="max-w-screen-xl px-4 py-1 sm:px-2 lg:px-2 lg:py-1 mx-auto">
    <!-- Card -->
    <div v-if="product" class="bg-white rounded-xl shadow-lg mt-7 p-4 sm:p-7">
      <div class="mb-3 flex flex-wrap">
        <section class="flex flex-col items-stretch w-[30%] max-md:w-full">
          <a href="javascript:void(0);" @click="goBack" class="mr-auto mb-3 text-xl text-gray-800 dark:text-black">
            All Products
          </a>
          <div class="flex flex-wrap items-start">
            <img :src="`http://localhost/${product.image_path}`" :alt="product.name" class="h-90 w-90 rounded-3xl">
          </div>
        </section>
        <section class="flex flex-col items-stretch w-[47%] ml-5 max-md:w-full">
          <h2 class="mt-8 text-3xl font-bold text-gray-800 text-black">
            {{ product.name }}
          </h2>
          <p class=" mt-2 flex text-black flex-wrap">
            {{ product.description }}
          </p>
          <h1 class="text-2xl font-semibold text-black mt-auto mb-3">
            Price: {{ product.price }} Baht
          </h1>
        </section>
        <section class="flex flex-col items-stretch w-[20%] ml-auto max-md:w-full">
          <button type="submit" @click="addToCart" class="flex flex-wrap block mt-auto py-2 px-3 ml-auto rounded-md border border-transparent font-semibold bg-stone-500 text-white text-xl hover:bg-stone-600 transition-all rounded-3xl">
            + | Add to Cart
          </button>
        </section>
      </div>
      <div class="pl-5">
        <!-- Content for 'pl-5' section goes here -->
      </div>
    </div>
    <div v-else>
      Loading... <!-- You can show a loading indicator while fetching data -->
    </div>
  </div>
  <!-- End Card -->
</template>

<script setup>

const route = useRoute()
const config = useRuntimeConfig()
const pageTitle = `Product no. ${route.params.id}`
const { data:product } = await useMyFetch(`products/${route.params.id}`, {})

onMounted(() => {
  fetchData();
});

const addToCart = () => {
  // Implement your add to cart logic here
};
</script>
