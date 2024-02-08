<template>
    <nav>
        <ul>
            <div class="logo" style="display: flex; align-items: center;">
                <img class="logo" src="../assets/Logo.png" alt="" />
                <label for="">Hello aquarium</label>
            </div>

            <input style="width: 290px; height: 50px;" type="search" placeholder="search for item">
            
            <i class="bi bi-cart-dash" style="width: 50px; height: 50px;"></i>
               <a href="">icon</a>
               <img src="" alt="">

            
        </ul>
        <div style="height: 63px; width: 1280px; border: solid 1px grey; border-left: none; border-right: none;">
        <li>

            <button style="border-left: none;" type="button">Home</button>
            <button type="button">Check out</button>
            <button type="button">Order history</button>
        </li>
    </div>
    </nav>

    
</template>

<style scoped>
/* nav{
    display: flex;
} */
ul{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
li{
        display: flex;
        /* gap:25px; */
        height: 61px;

      
}
button{
    height: 60px;
    border-color: grey;
    border-right: none;
    border-top:none;
    border-bottom: none;
    background-color: white;
    width: 145px;
}
input{
    border-radius: 10px;
    height: 50px;
    width: 300px;
    padding-left: 5px;
    border: 1px solid grey;
}
.logo{
    height: 79px;
    width: 78px;
}

</style>
<script>
import cart from '../assets/cart.svg' 
</script>

