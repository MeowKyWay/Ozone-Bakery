<template>

    <section class="bg-neutral-100 flex flex-col text-4xl pt-8 pb-20">
        <div class="flex flex-col">
          <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
            <div class="flex flex-col items-stretch w-6/12 max-md:w-full">
              <div id="scrollTarget" class="relative shrink-0 box-border h-auto text-3xl grow-0 w-auto ml-20 mt-5 mb-2.5 pl-10 text-black">
                All Products
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap max-md:flex-col max-md:items-stretch max-md:gap- ml-20 mr-20 pl-20 pr-20 mt-5 mx-auto">
          <div v-for="(product, index) in products" :key="index" class="flex flex-col items-stretch w-3/12 max-md:w-full mb-5">
            <div class="flex flex-col relative shrink-0 box-border h-auto shadow-[3px_-2px_26px_-20px_rgba(0,0,0,1)] w-[300px] self-center mt-5 pb-8 rounded-3xl border-[3px] border-solid border-stone-300">
              <img :src="product.imagePath" class="aspect-[1.46] object-cover object-center w-[250px] h-[250px] mx-auto my-5 rounded-2xl border-0 border-solid">
              <h3 class="text-2xl mx-auto text-black">{{ product.name }}</h3>
              <p class="text-xl mx-auto my-2.5 text-black">Price: {{ product.price }} Baht</p>
              <!-- <form @submit.prevent="addToCart()">
                <button href="" class="bg-stone-500 text-white no-underline text-base mx-auto px-5 py-2.5 rounded-3xl">
                  + | Add to Cart
                </button>
              </form> -->
            </div>
          </div>
        </div>
      </section>

</template>

<script setup lang="ts">

const { data: products, pending } = await useMyFetch<any>("products", {})

const errorMessage = ref("")

const cartFormData = ref({
  user_id: 0,
  product_id: 0,
  amount: 0,
})

// async function addToCart(product) {
//     const { user_id } = cartFormData.value
//     const { product_id } = product.id
//     const { amount } = cartFormData.value

//     console.log(user_id)
    
//     const { data: response, error } = await useMyFetch<any>("carts", {
//       method: "POST",
//       body: { user_id, product_id, amount}
//     })
  
//     if (response.value !== null) {
//       errorMessage.value = ""
//       await navigateTo(`/cart`)
//     }
//     else {
//       const { statusMessage, data } = error.value!
//       console.log(statusMessage)
//       errorMessage.value = data.message
//     }
//   }

</script>