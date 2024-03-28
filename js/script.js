// let slideIndex = 0;
// showSlides();

// function showSlides() {
//     let i;
//     let slides = document.getElementsByClassName("mySlides");
//     let dots = document.getElementsByClassName("dota");
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     slideIndex++;
//     if (slideIndex > slides.length) { slideIndex = 1 }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex - 1].style.display = "block";
//     dots[slideIndex - 1].className += " active";
//     setTimeout(showSlides, 2000); // Change image every 2 seconds
// }
// Get the pop-up form and the div element
var popupForm = document.getElementById("popupForm");
var openPopupBtn = document.getElementById("openPopupBtn");

// Get the close button element
var closeBtn = document.getElementsByClassName("close")[0];

// Open the pop-up form when the div element is hovered over
openPopupBtn.addEventListener("mouseover", function() {
    popupForm.style.display = "block";
});

// Close the pop-up form when the close button is clicked
closeBtn.onclick = function() {
    popupForm.style.display = "none";
}

// Close the pop-up form when clicking outside the form
window.onclick = function(event) {
    if (event.target == popupForm) {
        popupForm.style.display = "none";
    }
}
function showPopup(popupId) {
    document.getElementById(popupId).style.display = "flex";
}

function hidePopup(popupId) {
    setTimeout(() => {
        document.getElementById(popupId).style.display = "none";
    }, ); // Add a delay before hiding the popup
}
$(".testimonial-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000, // 3 seconds
    autoplayHoverPause: true,
});
  function subscribeNewsletter() {
    const emailInput = document.getElementById('emailInput');
    const email = emailInput.value;

    if (validateEmail(email)) {
      // Send the email to the server for subscription handling
      sendSubscriptionToServer(email);
    } else {
      alert('Please enter a valid email address');
    }
  }

  function validateEmail(email) {
    // Simple email validation, you can enhance it based on your requirements
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
  }

  function sendSubscriptionToServer(email) {
    // Replace 'your-server-endpoint' with the actual endpoint URL on your server
    const endpoint = 'your-server-endpoint';

    fetch(endpoint, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ email: email }),
    })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        // Handle the server response as needed
        console.log('Server response:', data);
        alert('Thank you for subscribing!');
      })
      .catch(error => {
        console.error('Error during subscription:', error);
        alert('Subscription failed. Please try again later.');
      });
  }