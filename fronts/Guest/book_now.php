<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Now - Luxury Hotel</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      background: linear-gradient(to right, #141e30, #243b55);
      color: #fff;
      min-height: 100vh;
    }

    /* Navbar Styles */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #002244;
      padding: 15px 30px;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo {
      color: #fff;
      font-size: 1.5rem;
      font-weight: bold;
    }

    .hamburger {
      /* display: none; */
      flex-direction: column;
      cursor: pointer;
      z-index: 1001;
      margin-left: auto;
    }

    .bar {
      height: 3px;
      width: 25px;
      background-color: #fff;
      margin: 4px 0;
      border-radius: 2px;
    }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 25px;
    }

    .nav-links a {
      color: #fff;
      text-decoration: none;
      font-size: 1rem;
      font-weight: bold;
      padding: 8px 12px;
      border-radius: 4px;
      transition: background 0.3s;
    }

    .nav-links a:hover {
      background-color: #00bcd4;
    }

    .profile-dropdown {
      position: relative;
      margin-left: 10px;
      margin-right: 10px;
      cursor: pointer;
      display: flex;
      align-items: center;
    }

    .profile-pic {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 2px solid #00bcd4;
      object-fit: cover;
    }

    .dropdown-menu {
      position: absolute;
      top: 50px;
      right: 0;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      list-style: none;
      padding: 10px 0;
      width: 180px;
      display: none;
      z-index: 999;
    }

    .dropdown-menu li {
      padding: 10px 20px;
    }

    .dropdown-menu li a {
      text-decoration: none;
      color: #333;
      font-size: 0.95rem;
    }

    .dropdown-menu li:hover {
      background-color: #f0f0f0;
    }

    /* Booking Container */
    .booking-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 50px 20px;
    }

    .booking-container {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(12px);
      padding: 2rem;
      border-radius: 20px;
      max-width: 500px;
      width: 100%;
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.1);
      animation: fadeInUp 1s ease;
    }

    .booking-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #00f0ff;
      font-weight: bold;
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    .form-group label {
      font-size: 0.9rem;
      color: #ccc;
      margin-bottom: 0.4rem;
      display: block;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 0.75rem;
      border-radius: 10px;
      border: none;
      background: rgba(255, 255, 255, 0.1);
      color: white;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
      color: #bbb;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      outline: none;
      background-color: rgba(255, 255, 255, 0.15);
      border: 1px solid #00f0ff;
    }

    .form-group textarea {
      resize: none;
      min-height: 80px;
    }

    .btn-submit {
      width: 100%;
      padding: 0.8rem;
      background: #00f0ff;
      color: #141e30;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .btn-submit:hover {
      background: #00c8e0;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media screen and (max-width: 600px) {
      .nav-links {
        flex-direction: column;
        position: fixed;
        top: 70px;
        left: -100%;
        background-color: #002244;
        width: 100%;
        padding: 20px 0;
        transition: left 0.4s ease, opacity 0.4s ease;
        opacity: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: calc(100vh - 70px);
        flex-wrap: wrap;
      }
      .nav-links.show {
        left: 0;
        opacity: 1;
      }
      .hamburger {
        display: flex;
        z-index: 1001;
        margin-left: 0;
      }
      .profile-dropdown {
        margin-left: 10px;
        margin-right: 10px;
      }
      .booking-container {
        padding: 1.2rem;
      }
    }
    .nav-right {
      display: flex;
      align-items: center;
      gap: 10px;
    }
  </style>
</head>
<body>
  <!-- NAVBAR -->
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
      <div class="nav-right">
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

  <!-- BOOKING FORM -->
  <div class="booking-wrapper">
    <div class="booking-container" data-aos="zoom-in">
      <h2>Book Your Stay</h2>
      <form>
        <div class="form-group">
          <label for="checkin">Check-In Date</label>
          <input type="date" id="checkin" name="checkin" required />
        </div>

        <div class="form-group">
          <label for="checkout">Check-Out Date</label>
          <input type="date" id="checkout" name="checkout" required />
        </div>

        <div class="form-group">
          <label for="guests">Number of Guests</label>
          <input type="number" id="guests" name="guests" placeholder="e.g., 2" min="1" required />
        </div>

        <div class="form-group">
          <label for="room">Room Type</label>
          <select id="room" name="room" required>
            <option value="" disabled selected>Select a room</option>
            <option>Single Room</option>
            <option>Double Room</option>
            <option>Deluxe Suite</option>
            <option>Presidential Suite</option>
          </select>
        </div>

        <div class="form-group">
          <label for="requests">Special Requests</label>
          <textarea id="requests" name="requests" placeholder="e.g., Late check-in, extra pillows..."></textarea>
        </div>

        <button type="submit" class="btn-submit" data-aos="fade-up">Proceed to Payment</button>
      </form>
    </div>
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ once: true, duration: 1000, easing: 'ease-in-out' });

    function toggleDropdown() {
      const menu = document.getElementById('dropdownMenu');
      menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
    }

    function toggleHamburger() {
      document.getElementById('hamburger').classList.toggle('active');
      const links = document.getElementById('navLinks');
      if (links.classList.contains('show')) {
        links.classList.remove('show');
      } else {
        links.classList.add('show');
      }
    }
  </script>
</body>
</html>
