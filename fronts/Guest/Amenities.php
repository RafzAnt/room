<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amenities</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Amenities.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>
<body>
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

      <div class="menu-right">
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
      </div>
    </nav>
  </header>
  <section class="amenities-section" id="amenities">
  <h2 class="section-title" data-aos="fade-down">VIP Hotel Amenities</h2>
  <p class="section-subtitle" data-aos="fade-up">Indulge in premium experiences designed for your comfort</p>

  <!-- Pool Section -->
  <div class="amenity-group">
    <h3 class="group-title" data-aos="fade-up">Infinity Pool</h3>
    <div class="amenity-gallery">
      <div class="image-card" data-aos="zoom-in"><img src="images/pool1.jpg" alt="Pool 1"></div>
      <div class="image-card" data-aos="zoom-in" data-aos-delay="100"><img src="images/pool2.jpg" alt="Pool 2"></div>
      <div class="image-card" data-aos="zoom-in" data-aos-delay="200"><img src="images/pool3.jpg" alt="Pool 3"></div>
    </div>
    <p class="description" data-aos="fade-up">Experience our rooftop infinity pool with skyline views and ambient lighting. Open from 6:00 AM – 10:00 PM daily.</p>
  </div>

  <!-- Gym Section -->
  <div class="amenity-group">
    <h3 class="group-title" data-aos="fade-up">Elite Fitness Gym</h3>
    <div class="amenity-gallery">
      <div class="image-card" data-aos="zoom-in"><img src="images/gym1.jpg" alt="Gym 1"></div>
      <div class="image-card" data-aos="zoom-in" data-aos-delay="100"><img src="images/gym2.jpg" alt="Gym 2"></div>
      <div class="image-card" data-aos="zoom-in" data-aos-delay="200"><img src="images/gym3.jpg" alt="Gym 3"></div>
    </div>
    <p class="description" data-aos="fade-up">Fully equipped with modern machines and personal trainers available. Open from 5:00 AM – 11:00 PM daily.</p>
  </div>

  <!-- Spa Section -->
  <div class="amenity-group">
    <h3 class="group-title" data-aos="fade-up">Luxury Spa</h3>
    <div class="amenity-gallery">
      <div class="image-card" data-aos="zoom-in"><img src="images/spa1.jpg" alt="Spa 1"></div>
      <div class="image-card" data-aos="zoom-in" data-aos-delay="100"><img src="images/spa2.jpg" alt="Spa 2"></div>
      <div class="image-card" data-aos="zoom-in" data-aos-delay="200"><img src="images/spa3.jpg" alt="Spa 3"></div>
    </div>
    <p class="description" data-aos="fade-up">Rejuvenate your body and soul with our massage, sauna, and wellness therapies. Reservation required. Open 10:00 AM – 9:00 PM.</p>
  </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="s.js"></script>
<script>
  AOS.init({ duration: 1000 });
</script>

</body>
</html>
