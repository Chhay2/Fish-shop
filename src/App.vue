<template>
  <div class="ctn">
  <div class="Allitempage">
  <Allitempage>
   <div class="Item"> <Item  
    v-for="i in Item"
    :image="i.image"
    :itemName="i.itemName"
    :Price="i.Price"
    >
  </Item>
  </div>
  </Allitempage>
  </div>
  </div>
</template>

<script>
// import Item from './components/Item.vue';
import Allitempage from './views/Allitempage.vue';
export default {
  name:"app",
components:{
    Allitempage
},


data(){
  return{
    Item:[
      {
        image:"https://i.natgeofe.com/n/633757ae-c0c5-43e6-a1fe-11342b9b4b72/fish-hero_16x9.jpg" ,
        itemName:"KKKKK",
        Price:"14",
      },
      {
        image:"https://i.natgeofe.com/n/633757ae-c0c5-43e6-a1fe-11342b9b4b72/fish-hero_16x9.jpg" ,
        itemName:"KKKKK",
        Price:"14",
      }
    ]
  }
}
}
</script>


