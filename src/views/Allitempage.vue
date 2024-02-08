
<script setup>
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
import Item from '@/components/Item.vue';
</script>

<template>
    <main>
     <header>
       <Navbar></Navbar>
     </header>
     <div style="padding: 103px;"></div>
     <body style="padding-left: 50px;">
       <Item></Item>
     </body>
     <div style="padding: 90px;"></div>
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

