<template>
    <div class="slider-container">
      <div class="slider" ref="slider">
        
        
  
        <!-- Static images -->
        <div class="slide">
          <img src="../assets/images/fish1.jpg" alt="Fish 1">
        </div>
        <div class="slide">
          <img src="../assets/images/fish2.jpg" alt="Fish 2">
        </div>
        <div class="slide">
          <img src="../assets/images/fish3.jpg" alt="Fish 3">
        </div>
      </div>
  
      <button class="prev" @click="prevSlide">❮</button>
      <button class="next" @click="nextSlide">❯</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        currentIndex: 0,
        slides: ["fish1.jpg", "fish2.jpg", "fish3.jpg"] // Replace with your image file names
      };
    },
    methods: {
      showSlide(index) {
        const offset = -index * 100 + '%';
        this.$refs.slider.style.transform = 'translateX(' + offset + ')';
      },
      nextSlide() {
        this.currentIndex = (this.currentIndex + 1) % this.slides.length;
        this.showSlide(this.currentIndex);
      },
      prevSlide() {
        this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
        this.showSlide(this.currentIndex);
      }
    },
    mounted() {
      setInterval(this.nextSlide, 3000); // Change slide every 3 seconds
    }
  };
  </script>
  
  <style scoped>
    body {
      margin: 0;
      overflow: hidden;
      font-family: Arial, sans-serif;
    }
  
    .slider-container {
      width: 100%;
      overflow: hidden;
      position: relative; /* Add this for absolute positioning of navigation buttons */
    }
  
    .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }
  
    .slide {
      min-width: 100%;
      box-sizing: border-box;
    }
  
    img {
      width: 100%;
      height: auto;
    }
  
    /* Optional: Style navigation buttons */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -25px;
      padding: 16px;
      color: white;
      font-size: 20px;
      font-weight: bold;
      user-select: none;
      background-color: rgba(0, 0, 0, 0.5);
      border: none;
      border-radius: 5px;
      outline: none;
      transition: background-color 0.3s;
    }
  
    .prev:hover, .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }
  
    .prev {
      left: 0;
    }
  
    .next {
      right: 0;
    }
  </style>
  