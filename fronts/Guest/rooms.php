<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="room.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

  <title>Rooms</title>
</head>
<body>
  <!-- Navbar -->
  <header>
    <nav class="navbar">
      <div class="logo">🏨 Room Booking</div>
      <ul class="nav-links" id="navLinks">
        <li><a href="home.php">Home</a></li>
        <li><a href="rooms.php">Rooms</a></li>
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

 <!-- Search Bar -->
<section class="search-section" data-aos="fade-down">
  <input type="text" id="searchInput" placeholder="Search Available Rooms..." />
  <button id="searchBtn" onclick="searchRooms()">Search</button>
</section>

<h2 data-aos="fade-up">Our Rooms</h2>

<!-- SINGLE ROOMS -->
<!-- SINGLE ROOMS -->
<h3 class="room-category">Single Rooms</h3>
<div class="rooms-container">
  <!-- Existing rooms -->
  <!-- New Rooms -->
  <div class="room-card" data-aos="zoom-in">
    <img src="images/single-room5.jpg" alt="Single Room E" class="room-image" />
    <div class="room-info">
      <h3>Single Room E</h3>
      <p>Price: $85/night</p>
      <ul><li>Queen Bed</li><li>Desk</li><li>Air Conditioning</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/single-room6.jpg" alt="Single Room F" class="room-image" />
    <div class="room-info">
      <h3>Single Room F</h3>
      <p>Price: $99/night</p>
      <ul><li>Smart TV</li><li>Balcony</li><li>Coffee Machine</li></ul>
      <p class="availability not-available">Not Available</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/single-room7.jpg" alt="Single Room G" class="room-image" />
    <div class="room-info">
      <h3>Single Room G</h3>
      <p>Price: $92/night</p>
      <ul><li>Queen Bed</li><li>Wi-Fi</li><li>Mini Fridge</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/single-room8.jpg" alt="Single Room H" class="room-image" />
    <div class="room-info">
      <h3>Single Room H</h3>
      <p>Price: $100/night</p>
      <ul><li>Smart TV</li><li>Work Desk</li><li>Air Conditioning</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/single-room9.jpg" alt="Single Room I" class="room-image" />
    <div class="room-info">
      <h3>Single Room I</h3>
      <p>Price: $95/night</p>
      <ul><li>Mini Fridge</li><li>Wi-Fi</li><li>Private Bathroom</li></ul>
      <p class="availability not-available">Not Available</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/single-room10.jpg" alt="Single Room J" class="room-image" />
    <div class="room-info">
      <h3>Single Room J</h3>
      <p>Price: $90/night</p>
      <ul><li>Queen Bed</li><li>Smart TV</li><li>Wi-Fi</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/single-room11.jpg" alt="Single Room K" class="room-image" />
    <div class="room-info">
      <h3>Single Room K</h3>
      <p>Price: $93/night</p>
      <ul><li>Air Conditioning</li><li>Work Desk</li><li>TV</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/single-room12.jpg" alt="Single Room L" class="room-image" />
    <div class="room-info">
      <h3>Single Room L</h3>
      <p>Price: $89/night</p>
      <ul><li>Private Bathroom</li><li>Mini Fridge</li><li>Wi-Fi</li></ul>
      <p class="availability not-available">Not Available</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/single-room13.jpg" alt="Single Room M" class="room-image" />
    <div class="room-info">
      <h3>Single Room M</h3>
      <p>Price: $80/night</p>
      <ul><li>Desk</li><li>TV</li><li>Wi-Fi</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/single-room14.jpg" alt="Single Room N" class="room-image" />
    <div class="room-info">
      <h3>Single Room N</h3>
      <p>Price: $98/night</p>
      <ul><li>Smart TV</li><li>Balcony</li><li>Air Conditioning</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
</div>


<!-- DOUBLE ROOMS -->
<!-- DOUBLE ROOMS -->
<h3 class="room-category">Double Rooms</h3>
<div class="rooms-container">
  <!-- Existing rooms -->
  <!-- New Rooms -->
  <div class="room-card" data-aos="zoom-in">
    <img src="images/double-room5.jpg" alt="Double Room E" class="room-image" />
    <div class="room-info">
      <h3>Double Room E</h3>
      <p>Price: $170/night</p>
      <ul><li>Private Balcony</li><li>2 King Beds</li><li>Microwave</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/double-room6.jpg" alt="Double Room F" class="room-image" />
    <div class="room-info">
      <h3>Double Room F</h3>
      <p>Price: $180/night</p>
      <ul><li>Sauna</li><li>Flat-screen TV</li><li>Mini Fridge</li></ul>
      <p class="availability not-available">Not Available</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/double-room7.jpg" alt="Double Room G" class="room-image" />
    <div class="room-info">
      <h3>Double Room G</h3>
      <p>Price: $165/night</p>
      <ul><li>Kitchenette</li><li>2 Queen Beds</li><li>Wi-Fi</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/double-room8.jpg" alt="Double Room H" class="room-image" />
    <div class="room-info">
      <h3>Double Room H</h3>
      <p>Price: $185/night</p>
      <ul><li>Bathtub</li><li>Smart TV</li><li>Wi-Fi</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/double-room9.jpg" alt="Double Room I" class="room-image" />
    <div class="room-info">
      <h3>Double Room I</h3>
      <p>Price: $160/night</p>
      <ul><li>2 Queen Beds</li><li>Microwave</li><li>Wi-Fi</li></ul>
      <p class="availability not-available">Not Available</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/double-room10.jpg" alt="Double Room J" class="room-image" />
    <div class="room-info">
      <h3>Double Room J</h3>
      <p>Price: $175/night</p>
      <ul><li>Room Service</li><li>Smart TV</li><li>Balcony</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/double-room11.jpg" alt="Double Room K" class="room-image" />
    <div class="room-info">
      <h3>Double Room K</h3>
      <p>Price: $190/night</p>
      <ul><li>Bathtub</li><li>Wi-Fi</li><li>Mini Bar</li></ul>
      <p class="availability not-available">Not Available</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/double-room12.jpg" alt="Double Room L" class="room-image" />
    <div class="room-info">
      <h3>Double Room L</h3>
      <p>Price: $185/night</p>
      <ul><li>2 Beds</li><li>Room Service</li><li>Balcony</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/double-room13.jpg" alt="Double Room M" class="room-image" />
    <div class="room-info">
      <h3>Double Room M</h3>
      <p>Price: $160/night</p>
      <ul><li>Wi-Fi</li><li>Smart TV</li><li>Kitchenette</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/double-room14.jpg" alt="Double Room N" class="room-image" />
    <div class="room-info">
      <h3>Double Room N</h3>
      <p>Price: $155/night</p>
      <ul><li>Private Bathroom</li><li>Wi-Fi</li><li>TV</li></ul>
      <p class="availability not-available">Not Available</p>
    </div>
  </div>
</div>


<!-- DELUXE ROOMS -->
<!-- DELUXE ROOMS -->
<h3 class="room-category">Deluxe Rooms</h3>
<div class="rooms-container">
  <!-- Existing rooms -->
  <!-- New Rooms -->
  <div class="room-card" data-aos="zoom-in">
    <img src="images/deluxe-room5.jpg" alt="Deluxe Room E" class="room-image" />
    <div class="room-info">
      <h3>Deluxe Room E</h3>
      <p>Price: $300/night</p>
      <ul><li>Private Pool</li><li>Ocean View</li><li>Jacuzzi</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/deluxe-room6.jpg" alt="Deluxe Room F" class="room-image" />
    <div class="room-info">
      <h3>Deluxe Room F</h3>
      <p>Price: $320/night</p>
      <ul><li>Sea View</li><li>Massage Chair</li><li>Bar Counter</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/deluxe-room7.jpg" alt="Deluxe Room G" class="room-image" />
    <div class="room-info">
      <h3>Deluxe Room G</h3>
      <p>Price: $310/night</p>
      <ul><li>Private Jacuzzi</li><li>Smart TV</li><li>Mini Bar</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/deluxe-room8.jpg" alt="Deluxe Room H" class="room-image" />
    <div class="room-info">
      <h3>Deluxe Room H</h3>
      <p>Price: $330/night</p>
      <ul><li>Rain Shower</li><li>Massage Chair</li><li>Oceanfront</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/deluxe-room9.jpg" alt="Deluxe Room I" class="room-image" />
    <div class="room-info">
      <h3>Deluxe Room I</h3>
      <p>Price: $340/night</p>
      <ul><li>Jacuzzi</li><li>Private Balcony</li><li>Ocean View</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/deluxe-room10.jpg" alt="Deluxe Room J" class="room-image" />
    <div class="room-info">
      <h3>Deluxe Room J</h3>
      <p>Price: $350/night</p>
      <ul><li>Massage Chair</li><li>Private Pool</li><li>Sea View</li></ul>
      <p class="availability not-available">Not Available</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/deluxe-room11.jpg" alt="Deluxe Room K" class="room-image" />
    <div class="room-info">
      <h3>Deluxe Room K</h3>
      <p>Price: $325/night</p>
      <ul><li>Private Jacuzzi</li><li>Oceanfront</li><li>Wi-Fi</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/deluxe-room12.jpg" alt="Deluxe Room L" class="room-image" />
    <div class="room-info">
      <h3>Deluxe Room L</h3>
      <p>Price: $360/night</p>
      <ul><li>Private Pool</li><li>Massage Chair</li><li>Sea View</li></ul>
      <p class="availability not-available">Not Available</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/deluxe-room13.jpg" alt="Deluxe Room M" class="room-image" />
    <div class="room-info">
      <h3>Deluxe Room M</h3>
      <p>Price: $375/night</p>
      <ul><li>Jacuzzi</li><li>Mini Bar</li><li>Private Beach Access</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
  <div class="room-card" data-aos="zoom-in">
    <img src="images/deluxe-room14.jpg" alt="Deluxe Room N" class="room-image" />
    <div class="room-info">
      <h3>Deluxe Room N</h3>
      <p>Price: $400/night</p>
      <ul><li>Oceanfront</li><li>Private Jacuzzi</li><li>Seating Area</li></ul>
      <p class="availability">Available Now</p>
    </div>
  </div>
</div>



  <!-- Main JS for hover, availability simulation & search -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const roomCards = document.querySelectorAll('.room-card');

    roomCards.forEach(card => {
      const roomImage = card.querySelector('.room-image');
      const roomInfo = card.querySelector('.room-info');
      const availabilityText = roomInfo.querySelector('.availability');

      // Hover effects
      card.addEventListener('mouseenter', () => {
        roomImage.style.transform = 'scale(1.1)';
        roomInfo.style.opacity = '1';
      });

      card.addEventListener('mouseleave', () => {
        roomImage.style.transform = 'scale(1)';
        roomInfo.style.opacity = '0';
      });
      function toggleHamburger() {
  const navLinks = document.getElementById("navLinks");
  navLinks.classList.toggle("active");
}

      // Simulate availability
      const simulateAvailability = () => {
        const isAvailable = Math.random() > 0.5;
        availabilityText.textContent = isAvailable ? 'Available Now' : 'Not Available';
        availabilityText.style.color = isAvailable ? 'green' : 'red';
      };

      simulateAvailability();
      setInterval(simulateAvailability, 5000);
    });
  });

  // Search filter
  function searchRooms() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const roomCards = document.querySelectorAll('.room-card');

    roomCards.forEach(card => {
      const title = card.querySelector('h3').textContent.toLowerCase();
      const availability = card.querySelector('.availability').textContent.toLowerCase();

      if (title.includes(input) || availability.includes(input)) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  }
</script>

<!-- External Scripts -->
<script src="s.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000 });
</script>

</body>
</html>
