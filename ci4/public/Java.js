// Java.js

document.addEventListener("DOMContentLoaded", function () {
    // Add your animation logic here
  
    // Example: A simple fade-out animation
    const body = document.body;
    body.style.opacity = 1;
  
    function fadeOut() {
      if (body.style.opacity > 0) {
        body.style.opacity -= 0.1;
        setTimeout(fadeOut, 100);
      } else {
        window.location.href = "Form.php";
      }
    }
  
    // Trigger the animation when the button is clicked
    const learnMoreButtons = document.querySelectorAll(".message");
  
    learnMoreButtons.forEach(function (message) {
        message.addEventListener("click", function () {
        fadeOut();
      });
    });
  });
  