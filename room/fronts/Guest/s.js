function toggleDropdown() {
  const dropdownMenu = document.getElementById("dropdownMenu");
  dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
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

// Wait until DOM is ready
document.addEventListener("DOMContentLoaded", function () {
  const bookNowBtn = document.querySelector('.book-now');
  const quickModal = document.getElementById('quickModal');

  if (bookNowBtn && quickModal) {
    bookNowBtn.addEventListener('click', function (e) {
      e.preventDefault();
      quickModal.style.display = 'flex';
    });
  }

  window.onclick = function (e) {
    const isProfileClick = e.target.matches('.profile-pic') || e.target.matches('.profile-mobile a');
    const isHamburgerClick = e.target.closest('#hamburger') || e.target.closest('#navLinks');
    const quickModal = document.getElementById('quickModal');

    // Close dropdowns if not clicking profile
    if (!isProfileClick) {
      const desktopMenu = document.getElementById("dropdownMenu");
      const mobileMenu = document.getElementById("dropdownMenuMobile");
      if (desktopMenu) desktopMenu.style.display = "none";
      if (mobileMenu) mobileMenu.style.display = "none";
    }

    // Close modal if clicked outside
    if (quickModal && e.target === quickModal) {
      quickModal.style.display = 'none';
    }

    // Optional: Close nav if clicked outside hamburger/nav
    if (!isHamburgerClick) {
      const navLinks = document.getElementById("navLinks");
      const hamburger = document.getElementById("hamburger");
      if (navLinks && hamburger) {
        navLinks.classList.remove("show");
        hamburger.classList.remove("active");
      }
    }
  };
});
