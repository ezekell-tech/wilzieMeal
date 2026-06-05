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
    <!-- contact section starts here -->
    <section class="sectionn">
        <div class="contact-container">
            <h1>Book A Table</h1>
        </div>
    </section>

<section class="sectionn">
<div class="forms-container">
    <div class="reservation-form">
        <h2>Reservation Form</h2>
        <p>Please fill out the form below to book a table at Wilzie Meals. We will get back to you to confirm your reservation.</p>
        <p>For any inquiries, you can also reach us at <strong>+233 566 7890</strong> </p>
        
        <form id="reservationForm" onsubmit="return validateForm(event)" method="POST" action="save_actions/reservation.php" >
          <div>
            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" />
          </div>
          <div>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" />
          </div>
          <div>
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
          </div>
          <div>
            <input type="text" class="form-control" name="food" id="food" placeholder="Enter your Meals" />
          </div>
          <div>
            <select class="form-control" name="people" id="people">
              <option value="" disabled selected>Number of people?</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          <div>
            <input type="date" name="date"  min="<?php echo $date; ?> "   value="<?php echo $date; ?>"  class="form-control" id="date" />
          </div>
          <div class="btn_box">
            <button type="submit" id="bookBtn" name="order">Book Now</button>
          </div>
        </form>
    </div>
</div>
  <div class="mapp">
        <h2>Find Us Here</h2>
        <p>We are located at 123 Food Street, Culinary City.</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.123456789012!2d-122.419415684681!3d37.774929779759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c8b8b8b8b%3A0x8b8b8b8b8b8b8b8b!2sWilzie%20Meals%20Restaurant!5e0!3m2!1sen!2sus!4v1616161616161" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
  <!-- end book section -->
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