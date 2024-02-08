<template>
<div class="itemBox" :style="{width:'270px',height:'289px', backgroundColor:'rgba(210, 210, 210, 1)',}">
    <img class="image" :src="image" alt="" :style="{width:'270px', height:'220px'}">
    <div class="itemName">{{ itemName }}</div>
    <div class="Price">{{ Price + '$'}}</div>
</div>
</template>

<script>
export default {
    name: "Item",
    props:{
        image: String,
        itemName: String,
        Price: String,

    },
};


</script>

<style scoped>

.itemName{
    font-family: inter;
    font-size: 24px;
    font-style: normal;
    color: black;
}
.Price{
    font-family: inter;
    font-size: 20px;
    font-style: normal;
    color: black;
}


</style>