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
        <div class="menu-container">
            <h1>Menu</h1>
        </div>
    </section>
<!-- Filter Buttons -->
  <section class="filter-section">
    <button class="filter-btn active" data-category="all">All</button>
    <button class="filter-btn" data-category="starters">Starters</button>
    <button class="filter-btn" data-category="main">Main</button>
    <button class="filter-btn" data-category="desserts">Desserts</button>
    <button class="filter-btn" data-category="drinks">Drinks</button>
  </section>

  <!-- Menu Items -->
  <section class="menu-items">
    <div class="menu-card" data-category="starters">
      <img src="assets/images/garlic (1).jpg" alt="Starter">
      <h3>Garlic Bread</h3>
      <p>Crispy bread topped with garlic butter</p>
      <span>$2.99</span>
    </div>
    <div class="menu-card" data-category="starters">
      <img src="assets/images/garlic (2).jpg" alt="Starter">
      <h3>Shawarma</h3>
      <p>Crispy with meat & sausage</p>
      <span>$3.99</span>
    </div>
    <div class="menu-card" data-category="starters">
      <img src="assets/images/garlic (3).jpg" alt="Starter">
      <h3>Phyllo</h3>
      <p> Lots of paper thin, crisp layers & samosas</p>
      <span>$3.99</span>
    </div>
    <div class="menu-card" data-category="starters">
      <img src="assets/images/garlic (5).jpg" alt="Starter">
      <h3>Bread Sausage</h3>
      <p>Crispy bread topped with butter & sausage</p>
      <span>$2.99</span>
    </div>

    <div class="menu-card" data-category="main">
      <img src="assets/images/f (17).jpeg" alt="Main">
      <h3>Grilled Chicken</h3>
      <p>Served with vegetables & sauce</p>
      <span>$12.99</span>
    </div>
    <div class="menu-card" data-category="main">
      <img src="assets/images/f (18).jpeg" alt="Main">
      <h3>Spagheti</h3>
      <p>Served with vegetables & meat</p>
      <span>$12.99</span>
    </div>
    <div class="menu-card" data-category="main">
      <img src="assets/images/f (4).jpeg" alt="Main">
      <h3>Kenkey</h3>
      <p>Served with fish & pepper & shrimps</p>
      <span>$12.99</span>
    </div>
    <div class="menu-card" data-category="main">
      <img src="assets/images/f (6).jpeg" alt="Main">
      <h3>Jollof Rice</h3>
      <p>Served with vegetables & sauce & meat</p>
      <span>$12.99</span>
    </div>

    <div class="menu-card" data-category="desserts">
      <img src="assets/images/dessert (3).jpg" alt="Dessert">
      <h3>Chocolate Cake</h3>
      <p>Rich and moist chocolate cake</p>
      <span>$6.99</span>
    </div>
    <div class="menu-card" data-category="desserts">
      <img src="assets/images/dessert (1).jpg" alt="Dessert">
      <h3>Strawberry Cake</h3>
      <p>Rich and moist strawberry cake</p>
      <span>$6.99</span>
    </div>
    <div class="menu-card" data-category="desserts">
      <img src="assets/images/dessert (7).jpg" alt="Dessert">
      <h3>Strawberry Pancake</h3>
      <p>Served with strawberries</p>
      <span>$6.99</span>
    </div>
    <div class="menu-card" data-category="desserts">
      <img src="assets/images/dessert (8).jpg" alt="Dessert">
      <h3>Chocolate Pancake</h3>
      <p>Rich and moist chocolate</p>
      <span>$6.99</span>
    </div>

    <div class="menu-card" data-category="drinks">
      <img src="assets/images/drinks (1).jpg" alt="Drink">
      <h3>Fresh Mango Juice</h3>
      <p>Refreshing homemade mangoe</p>
      <span>$3.99</span>
    </div>
    <div class="menu-card" data-category="drinks">
      <img src="assets/images/drinks (3).jpg" alt="Drink">
      <h3>Wine</h3>
      <p>Refreshing and affordable wines</p>
      <span>$3.99</span>
    </div>
        <div class="menu-card" data-category="drinks">
      <img src="assets/images/drinks (8).jpg" alt="Drink">
      <h3>Fresh Lemonade</h3>
      <p>Refreshing homemade lemonade</p>
      <span>$3.99</span>
    </div>
        <div class="menu-card" data-category="drinks">
      <img src="assets/images/drinks (5).jpg" alt="Drink">
      <h3>Liqour</h3>
      <p>Refreshing alcohol</p>
      <span>$3.99</span>
    </div>
  </section> <br>
  
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

    const filterButtons = document.querySelectorAll('.filter-btn');
const menuCards = document.querySelectorAll('.menu-card');

filterButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove active class from all
    filterButtons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');

    const category = button.dataset.category;

    menuCards.forEach(card => {
      if (category === 'all' || card.dataset.category === category) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  });
});


     
    </script>
</body>

</html>
