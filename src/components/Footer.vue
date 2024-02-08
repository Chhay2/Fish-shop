<template>
    <div>
      <!-- Your slider content goes here -->
  
      <!-- Footer -->
      <footer class="footer">
        <div class="footer-content">
          <div class="footer-logo">
            <!-- <img src="../assets/Logo.png" alt="Company Logo"> -->
          </div>
          <div class="footer-info">
            <h3>Information</h3>
            <p>about us</p>
          </div>
          <div class="footer-social">
            <h4>Customer Service</h4>
            <p>About Us</p>
          </div>
          <div class="footer-social">
            <h3>Contact US</h3>
            <p>address</p>
            <p>Mail Us</p>
            <p>Phone</p>
            <ul>
              <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
              <!-- Add more social media icons as needed -->
            </ul>
          </div>
        </div>
        <!-- <div class="footer-bottom">
          <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div> -->
      </footer>
    </div>
  </template>
  
  <script>
  export default {
    // Your existing component code
  };
  </script>
  
  <style scoped>
  /* Your existing styles */
  
  .footer {
    background-color: rgba(217, 217, 217, 1);
    color: black;
    padding: 40px 0;
  }
  
  .footer-content {
    max-width: 1280px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
  }
  
  .footer-logo img {
    max-width: 100%;
    height: auto;
  }
  
  .footer-info, .footer-social {
    flex: 1;
    margin: 20px;
  }
  
  .footer-info h3, .footer-social h3 {
    color: black;
  }
  
  .footer-info p {
    margin: 5px 0;
  }
  
  .footer-social ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
  }
  
  .footer-social li {
    margin-right: 10px;
  }
  
  .footer-social i {
    font-size: 24px;
    color: #fff;
    transition: color 0.3s;
  }
  
  .footer-social i:hover {
    color: #55acee; /* Twitter blue color */
  }
  
  .footer-bottom {
    text-align: center;
    margin-top: 20px;
  }
  </style>
  