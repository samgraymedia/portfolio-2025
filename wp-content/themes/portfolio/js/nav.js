document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".header");
  const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
  const navMenu = document.querySelector(".nav-main ul");
  const scrollThreshold = 50;

  function handleScroll() {
    if (window.scrollY > scrollThreshold) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  }

  function toggleMobileMenu() {
    mobileMenuBtn.classList.toggle("active");
    navMenu.classList.toggle("active");
    document.body.classList.toggle("menu-open");
  }

  // Close mobile menu when clicking outside
  document.addEventListener("click", function (event) {
    if (
      navMenu.classList.contains("active") &&
      !event.target.closest(".nav-main") &&
      !event.target.closest(".mobile-menu-btn")
    ) {
      toggleMobileMenu();
    }
  });

  // Close mobile menu when clicking a link
  navMenu.addEventListener("click", function (event) {
    if (event.target.tagName === "A") {
      toggleMobileMenu();
    }
  });

  mobileMenuBtn.addEventListener("click", toggleMobileMenu);
  window.addEventListener("scroll", handleScroll);
  // Initial check
  handleScroll();
});
