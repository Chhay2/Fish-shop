<template>
    <nav>
        <ul>
            <div class="logo">
                <img src="" alt="" />
                <label for="">Name</label>
            </div>
            <li>    
                <a href="">Home</a>
                <a href="">About Us</a>
                <a href="">Contact</a>
            </li>
            <input type="search" placeholder="search for item">
            <div class="acc">
               <a href="">icon</a>
               <img src="" alt="">
            </div>
        </ul>
    </nav>

    
</template>

<style scoped>
nav{

}
ul{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
li{
        display: flex;
        gap:25px;
      
}
input{
    border-radius: 10px;
    height: 50px;
    width: 300px;
    padding-left: 5px;
    border: 1px solid grey;
}
</style>
<script>

</script>