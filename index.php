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
    <!-- main content goes here -->
     <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="600">
      <img src="assets/images/f (1).jpeg" class="d-block w-100" alt="img">
    </div>
    <div class="carousel-item" data-bs-interval="600">
      <img src="assets/images/f (6).jpeg" class="d-block w-100" alt="img">
    </div>
        <div class="carousel-item" data-bs-interval="500">
      <img src="assets/images/f (16).jpeg" class="d-block w-100" alt="img">
    </div>
    <div class="carousel-item" data-bs-interval="500">
      <img src="assets/images/f (20).jpeg" class="d-block w-100" alt="img">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <section class="main-content">
        <div class="main-content-bg">
            <img src="assets/images/bg1.jpeg" alt="Background Image" class="bg-image">
          <div class="content-container">
            <h1>WELCOME TO WILZIE MEALS</h1>
              <div class="content-text">
                <div class="content-p">
                  <p>At Wilzie Meals, we believe in serving delicious and nutritious meals that bring people together. <br> Our menu is crafted with care, using the freshest ingredients to create dishes that satisfy your cravings and nourish your body.</p>
                  <p>Whether you're looking for a quick bite or a full-course meal, we have something for everyone. <br>Join us for a culinary experience that will tantalize your taste buds and leave you wanting more.</p>
                </div>
              </div>
            <a href="menu.php"><button class="view-menu-btn">View Menu</button></a>
         </div>
        </div>
    </section>
<div class="section">
  <img src="assets/images/AWARD.jpg" alt="img" class="section-image">
</div>
<section class="highlight-section">
  <img src="assets/images/view (6).jpeg" alt="Restaurant Image" class="background-img">

  <div class="content-box">
    <h2>EXPERIENCE THE TASTE OF <span class="highlight">EXCELLENCE</span></h2>
    <p>Where quality and passion for grilling become unforgettable experiences.</p>
    <a href="aboutus.php" class="learn-more-btn">Learn more</a>
  </div>
</section>
<!-- news section -->
<!-- <section class="section"> -->
  <div class="news-section">
    <h1 class="title">NEWS</h1>
    <a href="aboutus.php"><button class="see-all">See all</button></a>

    <div class="news-container">
      <div class="news-card">
        <img src="assets/images/steak (1).jpg" alt="Masters of Cutting">
        <h3>MASTERS OF CUTTING</h3>
        <p>Our meat experts master the grill, turning every cut into a masterpiece.</p>
      </div>

      <div class="news-card">
        <img src="assets/images/steak (4).jpg" alt="Dates with Flavor">
        <h3>DATES WITH FLAVOR</h3>
        <p>We transform any occasion into an incomparable celebration, taking care of every detail so you can enjoy it with gusto.</p>
      </div>

      <div class="news-card">
        <img src="assets/images/steak (3).jpg" alt="The Essence of Heat">
        <h3>THE ESSENCE OF HEAT</h3>
        <p>Where the art of fire and passion come together to create experiences that transcend the palate, becoming memorable memories.</p>
      </div>

      <div class="news-card">
        <img src="assets/images/steak (2).jpg" alt="Exclusive Moments">
        <h3>EXCLUSIVE MOMENTS</h3>
        <p>Events that only Casa Res can offer, designed to captivate all the senses, where good taste becomes a celebration.</p>
      </div>
    </div>
  </div>
  <!-- </section> -->

  <!-- link map -->
  <section class="map-section">
    <div class="map-container">
      <h1 class="map-title">FIND US ON THE MAP</h1>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.123456789012!2d-122.419415684681!3d37.774929779759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c8b8b8b8b%3A0x8b8b8b8b8b8b8b8b!2sWilzie%20Meals%20Restaurant!5e0!3m2!1sen!2sus!4v1616161616161" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
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




   




    <script>
     function toggleNav() {
            const navBar = document.getElementById('navBar');
            navBar.classList.toggle('active');
        };

     document.addEventListener("DOMContentLoaded", () => {
      const elements = document.querySelectorAll('.section');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1
      });

      elements.forEach(el => observer.observe(el));
    });

      document.addEventListener("DOMContentLoaded", () => {
    const contentBox = document.querySelector(".content-box");

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target); // fade in once
        }
      });
    }, {
      threshold: 0.2
    });

    observer.observe(contentBox);
  });
    </script>
</body>

</html>