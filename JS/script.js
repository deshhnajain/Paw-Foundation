// script.js

// Automatic Slideshow
var headerss = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("images");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    headerss++;
    if (headerss > x.length) {
        headerss = 1;
    }
    x[headerss - 1].style.display = "block";
    setTimeout(carousel, 1000);
}

// Automatic Slideshow for About >> Mission and Vision
var cardss = 0;
showSlides();

function showSlides() {
    var i;
    var c1 = document.getElementsByClassName("card");
    var c2 = document.getElementsByClassName("card-2");
    for (i = 0; i < c1.length; i++) {
        c1[i].style.display = "none";
    }
    cardss++;
    if (cardss > c1.length) {
        cardss = 1;
    }
    for (i = 0; i < c2.length; i++) {
        c2[i].style.display = "none";
    }
    cardss++;
    if (cardss > c2.length) {
        cardss = 1;
    }
    c1[cardss - 1].style.display = "block";
    c2[cardss - 1].style.display = "block";
    setTimeout(showSlides, 1000);
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

document.addEventListener("click", function (event) {
    var sidebar = document.getElementById("sidebar");
    var sidebarButton = document.getElementById("sidebarButton");

    // Check if the sidebar is open and the click is outside the sidebar and the button
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
