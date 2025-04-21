<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Hotel Room Booking System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <!-- ✅ Correct way to add Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!-- AOS animation -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>

<body>
  <header>
    <h1>Hotel Room Booking System</h1>
  </header>

  <section id="login-form" class="form-section">
    <!-- USER LOGIN FORM -->
    <form class="form-content animate" id="user-form" method="POST" action="../../database/guest_login.php">
      <h2>User Login</h2>
      <div class="form-group">
        <select id="user-login-dropdown" onchange="handleDropdownChange(this)">
          <option value="" disabled selected>Login as</option>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <div class="form-group">
        <input type="text" name="email" placeholder=" " required />
        <label>Email</label>
      </div>
      <div class="form-group">
        <input type="password" name="password" placeholder=" " required />
        <label>Password</label>
      </div>
      <button type="submit">Login</button>
      <p onclick="toggleSignup()">Create Account</p>
    </form>

    <!-- ADMIN LOGIN FORM -->
    <form class="form-content animate hidden" id="admin-form">
      <h2>Admin Login</h2>
      <div class="form-group">
        <select id="admin-login-dropdown" onchange="handleDropdownChange(this)">
          <option value="" disabled selected>Login as</option>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <div class="form-group">
        <input type="text" placeholder=" " required autocomplete="off" />
        <label>Admin ID</label>
      </div>
      <div class="form-group">
        <input type="password" placeholder=" " required autocomplete="off" />
        <label>Password</label>
      </div>
      <button type="submit">Login</button>
    </form>

    <!-- SIGN UP FORM -->
    <form class="form-content animate hidden" id="signup-form" method="POST" action="../../database/register.php">
      <button type="button" class="close-btn" onclick="closeSignup()">X</button>
      <h2>Sign Up</h2>
      <div class="form-group"><input type="text" name="email" placeholder=" " required /><label>Email</label></div>
      <div class="form-group"><input type="password" name="password" placeholder=" " required /><label>Password</label></div>
      <div class="form-group"><input type="text" name="firstname" placeholder=" " required /><label>Firstname</label></div>
      <div class="form-group"><input type="text" name="lastname" placeholder=" " required /><label>Lastname</label></div>
      <div class="form-group"><input type="email" name="phone" placeholder=" " required /><label>Phone</label></div>
      <h2>Address</h2>
      <div class="form-group"><input type="text" name="street" placeholder=" " required /><label>Street</label></div>
      <div class="form-group"><input type="text" name="barangay" placeholder=" " required /><label>Barangay</label></div>
      <div class="form-group"><input type="text" name="town" placeholder=" " required /><label>Town</label></div>
      <div class="form-group"><input type="text" name="city" placeholder=" " required /><label>City</label></div>
      <button type="submit">Create Account</button>
    </form>
  </section>

  <section class="rooms">
    <h2 style="text-align:center;">BOOK YOUR ROOM NOW</h2>
    <div class="room-gallery">
      <img src="../img/deluxe.jpg" alt="Deluxe Room" />
      <img src="../img/room.jpg" alt="Standard Room" />
      <img src="../img/tradition.jpg" alt="Traditional Room" />
      <img src="../img/oky.jpg" alt="Traditional Room" />
    </div>
  </section>

  <!-- ✅ FOOTER WITH ICONS -->
  <footer class="hotel-footer" data-aos="fade-up">
    <div class="footer-container">
      <div class="footer-brand">
        <h2>HOTEL ROOM BOOKING</h2>
        <p>Experience comfort, elegance, and luxury at its finest.</p>
      </div>
      <div class="footer-links">
        <a href="#">About Us</a>
        <a href="#">Rooms</a>
        <a href="#">Contact</a>
        <a href="#">Privacy Policy</a>
      </div>
      <div class="footer-social">
        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-tripadvisor"></i></a>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025 Hotel room booking. All Rights Reserved.
    </div>
  </footer>

  <!-- AOS and Footer Script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
    const userForm = document.getElementById('user-form');
    const signupForm = document.getElementById('signup-form');
    const adminForm = document.getElementById('admin-form');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const loadingText = document.getElementById('loadingText');

    userForm.addEventListener('submit', () => {
      loadingText.innerText = 'Logging in...';
      loadingOverlay.classList.remove('error-mode');
      loadingOverlay.style.display = 'flex';
    });

    signupForm.addEventListener('submit', () => {
      loadingText.innerText = 'Creating your account...';
      loadingOverlay.classList.remove('error-mode');
      loadingOverlay.style.display = 'flex';
    });

    adminForm.addEventListener('submit', () => {
      loadingText.innerText = 'Logging in as admin...';
      loadingOverlay.classList.remove('error-mode');
      loadingOverlay.style.display = 'flex';
    });

    function toggleSignup() {
      document.getElementById('signup-form').classList.remove('hidden');
      document.getElementById('user-form').classList.add('hidden');
      document.getElementById('admin-form').classList.add('hidden');
    }

    function closeSignup() {
      document.getElementById('signup-form').classList.add('hidden');
      document.getElementById('user-form').classList.remove('hidden');
    }

    function handleDropdownChange(select) {
      const userForm = document.getElementById('user-form');
      const adminForm = document.getElementById('admin-form');
      if (select.value === 'admin') {
        userForm.classList.add('hidden');
        adminForm.classList.remove('hidden');
      } else {
        userForm.classList.remove('hidden');
        adminForm.classList.add('hidden');
      }
    }

    window.onload = function () {
      const urlParams = new URLSearchParams(window.location.search);
      const error = urlParams.get('error');
      if (error) {
        loadingOverlay.style.display = 'flex';
        loadingOverlay.classList.add('error-mode');
        loadingText.innerText = error === 'empty' ? 'Please fill in both fields.'
          : error === 'wrongpass' ? 'Incorrect password.'
          : error === 'notfound' ? 'No account found with that email.'
          : 'Login failed.';
        setTimeout(() => {
          loadingOverlay.style.display = 'none';
          loadingOverlay.classList.remove('error-mode');
        }, 3000);
      }
    };
  </script>
</body>
</html>
