function toggleDropdown() {
    const dropdownMenu = document.getElementById("dropdownMenu");
    if (dropdownMenu.style.display === "block") {
      dropdownMenu.style.display = "none";
    } else {
      dropdownMenu.style.display = "block";
    }
  }

  window.onclick = function (e) {
    if (!e.target.matches('.profile-pic') && !e.target.matches('.profile-mobile a')) {
      const desktopMenu = document.getElementById("dropdownMenu");
      const mobileMenu = document.getElementById("dropdownMenuMobile");
      if (desktopMenu) desktopMenu.style.display = "none";
      if (mobileMenu) mobileMenu.style.display = "none";
    }
  }

  function toggleHamburger() {
    const hamburger = document.getElementById("hamburger");
    const navLinks = document.getElementById("navLinks");
    hamburger.classList.toggle("active");
    navLinks.classList.toggle("show");
  }
  // Initialize AOS animations
AOS.init({
  duration: 800,
  offset: 100,
  once: true
});

// Modal handling
document.addEventListener("DOMContentLoaded", function () {
  const bookNowBtn = document.querySelector('.book-now');
  const quickModal = document.getElementById('quickModal');

  bookNowBtn.addEventListener('click', function (e) {
    e.preventDefault();
    quickModal.style.display = 'flex';
  });

  window.onclick = function (event) {
    if (event.target === quickModal) {
      quickModal.style.display = 'none';
    }
  };
});
