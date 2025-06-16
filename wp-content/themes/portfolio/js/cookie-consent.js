document.addEventListener("DOMContentLoaded", function () {
  const cookieConsent = document.getElementById("cookie-consent");
  const acceptButton = document.getElementById("cookie-accept");
  const settingsButton = document.getElementById("cookie-settings");

  // Check if user has already made a choice
  const hasConsent = localStorage.getItem("cookieConsent");

  if (!hasConsent) {
    // Show the cookie consent popup after a short delay
    setTimeout(() => {
      cookieConsent.style.display = "block";
      // Add show class after a small delay to trigger the animation
      setTimeout(() => {
        cookieConsent.classList.add("show");
      }, 100);
    }, 1000);
  }

  // Handle accept button click
  acceptButton.addEventListener("click", function () {
    localStorage.setItem("cookieConsent", "accepted");
    hideCookieConsent();
  });

  // Handle settings button click
  settingsButton.addEventListener("click", function () {
    // Here you can implement your cookie settings modal/page
    console.log("Cookie settings clicked");
    // For now, we'll just hide the popup
    localStorage.setItem("cookieConsent", "settings");
    hideCookieConsent();
  });

  function hideCookieConsent() {
    cookieConsent.classList.remove("show");
    // Wait for the animation to complete before hiding the element
    setTimeout(() => {
      cookieConsent.style.display = "none";
    }, 300);
  }
});
