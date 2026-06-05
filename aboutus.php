<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wilzie Meals</title>
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/mediaquery.css">
    <!-- link to favicon -->
    <link rel="icon" href="assets/images/wzm.jpg" type="jpg/ico">
    <!-- link script -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>
  
    <!-- header and navigation and humberger goes here -->
     <section class="header-section">
        <div class="header-container">
            <div class="logo">
                <a href="index.php"><img class="h-logo" src="assets/images/wzm.jpg" alt="Wilzie Meals Logo"></a>
            </div>
            
            <div class="nav-menu">
                <nav class="nav-bar" id="navBar">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="contact.php">Book A Table</a></li>
                    </ul>
                </nav>
            </div>
            <button class="hamburger" onclick="toggleNav()">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
        </div>
     </section>
  <!-- about us starts here -->
    <section class="sectionn">
        <div class="about-container">
            <h1>About Us</h1>
        </div>
    </section>

    <section class="sectionn">
      <div class="about-content-container">
            <h1>Our Story</h1>
      <div class="about-text">
            <p>Welcome to Wilzie Meals, where we believe that food is not just sustenance, but a celebration of life. Our journey began with a simple passion for cooking and a desire to share delicious meals with our community. We are dedicated to providing high-quality, flavorful dishes made from the freshest ingredients.</p>
            <p>At Wilzie Meals, we take pride in our diverse menu that caters to all tastes and preferences. Whether you're craving traditional favorites or adventurous new flavors, we have something for everyone. Our team of skilled chefs works tirelessly to create culinary masterpieces that will tantalize your taste buds.</p>
            <p>We are committed to sustainability and ethical sourcing, ensuring that our ingredients are not only delicious but also responsibly sourced. Join us in our mission to bring people together through the love of food.</p>
            <p>Thank you for choosing Wilzie Meals. We look forward to serving you and making every meal a memorable experience.</p>
        </div>
      </div>
    </section>
<section class="sectionn">
  <section class="team-section">
  <h4 class="section-subtitle">Team Members</h4>
  <h2 class="section-title">Our Master Chefs</h2>
  
  <div class="team-grid">
    <div class="team-member">
      <div class="member-photo">
        <img src="assets/images/chef4.jpeg" alt="Chef 1">
      </div>
      <h3>Ms. Elizabeth</h3>
      <p>Incharge of Local Dishes</p>
    </div>

    <div class="team-member">
      <div class="member-photo">
        <img src="assets/images/chef1.jpeg" alt="Chef 2">
      </div>
      <h3>Mr. Best</h3>
      <p>In Charge of Main Dishes</p>
    </div>

    <div class="team-member">
      <div class="member-photo">
        <img src="assets/images/chef2.jpeg" alt="Chef 3">
      </div>
      <h3>Mr. Sylvester</h3>
      <p>In charge of Breakfast </p>
    </div>

    <div class="team-member">
      <div class="member-photo">
        <img src="assets/images/chef3.jpeg" alt="Chef 4">
      </div>
      <h3>Ms. Augustina</h3>
      <p>In charge of Dessert</p>
    </div>
  </div>
</section>
</section>

<!-- footer section -->
<footer class="footer">
    <div class="footer-container">
      <div class="footer-section brand">
        <img src="assets/images/wzm.jpg" alt="Wilzie Meals Logo" class="footer-logo" width="150px" height="50px">
        <h2>WILZIE MEALS</h2>
        <p>We serve you the best meal</p>
      </div>

      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li>Services</li>
          <li>Retreat</li>
          <li>Events</li>
          <li>Contact</li>
        </ul>
      </div>

      <div class="footer-section">
        <h4>Stay In Touch</h4>
        <ul>
          <li>Facebook</li>
          <li>Instagram</li>
          <li>YouTube</li>
          <li>Spotify</li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>Copyright © 2024 awakenedtemplates. All rights reserved. @ Carter Best</p>
      <div class="footer-links">
        <a href="#">Privacy</a>
        <a href="#">Terms</a>
      </div>
    </div>
  </footer>
  <!-- footer section -->
    






<script>
     function toggleNav() {
            const navBar = document.getElementById('navBar');
            navBar.classList.toggle('active');
        };

     document.addEventListener("DOMContentLoaded", () => {
      const elements = document.querySelectorAll('.sectionn');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target); // optional: only animate once
          }
        });
      }, {
        threshold: 0.1
      });

      elements.forEach(el => observer.observe(el));
    });

     
    </script>
</body>

</html>