<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hotel Booking - Guest UI</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

  <!-- NAVBAR -->
  <header>
    <nav class="navbar">
      <div class="logo">🏨 Room Booking</div>
      <ul class="nav-links" id="navLinks">
        <li><a href="home.php">Home</a></li>
        <li><a href="rooms.php" id="roomsLink">Rooms</a></li>
        <li><a href="book_now.php">Book Now</a></li>
        <li><a href="Amenities.php">Amenities</a></li>
        <li><a href="#">My Bookings</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>

      <!-- PROFILE DROPDOWN -->
      <div class="profile-dropdown">
        <img src="https://i.pravatar.cc/40" alt="Profile" class="profile-pic" onclick="toggleDropdown()" />
        <ul class="dropdown-menu" id="dropdownMenu">
          <li><a href="#">My Profile</a></li>
          <li><a href="#">Booking History</a></li>
          <li><a href="#">Feedback & Reviews</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>

      <!-- HAMBURGER MENU -->
      <div class="hamburger" id="hamburger" onclick="toggleHamburger()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </nav>
  </header>

  <!-- WELCOME BANNER -->
  <section class="welcome-banner" data-aos="fade-in">
    <div class="welcome-text">
      <h2>book mo or dili kay na!</h2>
      <p>Your perfect getaway by the beach. Comfort, elegance, and relaxation await you.</p>
      <a href="#" class="book-now" onclick="openModal()">Quick Book</a>
    </div>
  </section>

  <!-- FEATURED ROOMS -->
  <section class="featured-rooms">
    <h3>Featured Rooms</h3>
    <div class="carousel" data-aos="fade-up">
      <div class="carousel-track">
        <div class="room-card">
          <img src="images/room1.jpg" alt="Deluxe Sea View">
          <h4>Deluxe Sea View</h4>
          <p>₱3,500/night · King bed</p>
        </div>
        <div class="room-card">
          <img src="images/room2.jpg" alt="Family Suite">
          <h4>Family Suite</h4>
          <p>₱4,800/night · 2 Queen beds</p>
        </div>
        <div class="room-card">
          <img src="images/room3.jpg" alt="Garden Room">
          <h4>Garden Room</h4>
          <p>₱2,800/night · Cozy & private</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROMOS -->
  <section class="promos" data-aos="zoom-in">
    <h3>Special Promos</h3>
    <div class="promo-banner">
      <p><strong>🎉 Summer Promo:</strong> Get 15% OFF for bookings made this April!</p>
      <a href="#" class="promo-btn">Grab Deal</a>
    </div>
  </section>

  <!-- QUICK BOOKING MODAL -->
  <div id="quickModal" class="modal">
    <div class="modal-content" data-aos="zoom-in">
      <span class="close" onclick="closeModal()">&times;</span>
      <h2>Quick Booking</h2>
      <form>
        <input type="text" placeholder="Full Name" required>
        <input type="email" placeholder="Email Address" required>
        <input type="date" required>
        <input type="date" required>
        <button type="submit">Book Now</button>
      </form>
    </div>
  </div>

  <!-- SCRIPTS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="s.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
