<script setup>

import Navbar from '@/components/Navbar.vue';
import slider from '@/components/slider.vue';
import Footer from '../components/Footer.vue';
import Product from '../components/Product.vue'

</script>

<template>
  <main>
    <header>
      <Navbar></Navbar>
    </header>
    <body>
      <slider></slider>
      <Product></Product>
    </body>
    <footer>
      <Footer></Footer>
    </footer>
  </main>
</template>

<style scoped>
 main{

  padding: 0px 150px;
 }
</style>