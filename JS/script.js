// script.js

// Automatic Slideshow
var headerss = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("images");

    // Hide all elements with class "images"
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    // Increment headerss to show the next slide
    headerss++;

    // Reset headerss if it exceeds the number of slides
    if (headerss > x.length) {
        headerss = 0;
    }

    // Display the current slide
    x[headerss - 1].style.display = "block";

    // Set a timeout to call carousel function again after 2000 milliseconds (2 seconds)
    setTimeout(carousel, 2000); 
}

// Automatic Slideshow for About >> Mission and Vision
var cardIndex = 0;
showSlides();

function showSlides() {
    var i;
    var cards1 = document.getElementsByClassName("card");
    var cards2 = document.getElementsByClassName("card-2");
    
    for (i = 0; i < cards1.length; i++) {
        cards1[i].style.display = "none";
    }
    for (i = 0; i < cards2.length; i++) {
        cards2[i].style.display = "none";
    }
    cardIndex++;
    if (cardIndex > cards1.length) {
        cardIndex = 1;
    }
    cards1[cardIndex - 1].style.display = "block";
    cards2[cardIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); 
}

// Signup form sidebar functionality
document.getElementById("sidebarButton").onclick = function (event) {
    var sidebar = document.getElementById("sidebar");
    if (sidebar.style.width === "50%") {
        sidebar.style.width = "0";
    } else {
        sidebar.style.width = "50%";
    }
    event.stopPropagation();
};

document.addEventListener("click", function (event) {
    var sidebar = document.getElementById("sidebar");
    var sidebarButton = document.getElementById("sidebarButton");

    if (sidebar.style.width === "50%" && !sidebar.contains(event.target) && !sidebarButton.contains(event.target)) {
        sidebar.style.width = "0";
    }
});

// Switching between Login and Signup forms
document.getElementById("showSignupForm").onclick = function () {
    document.getElementById("login-form").style.display = "none";
    document.getElementById("signup-form").style.display = "block";
};

document.getElementById("showLoginForm").onclick = function () {
    document.getElementById("signup-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
};

// New Slider Functionality (added below)

document.addEventListener("DOMContentLoaded", function() {
    let slides = document.querySelectorAll('#slider .slide');
    let currentSlide = 0;
    let slideInterval = setInterval(nextSlide, 3000);

    function nextSlide() {
        slides[currentSlide].style.display = 'none';
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].style.display = 'block';
    }

    // Initially set the first slide to be visible
    if (slides.length > 0) {
        slides[0].style.display = 'block';
    }
});
