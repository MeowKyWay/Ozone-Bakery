import portcss from "postcss";

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },

  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
  css: [
    '~/assets/css/main.css',
  ],

  modules: [
    '@vueuse/nuxt',
    '@pinia/nuxt',
		'@pinia-plugin-persistedstate/nuxt',
  ],

})
