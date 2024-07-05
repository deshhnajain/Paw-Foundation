// Automatic Slideshow
let headerss = 0;
carousel();

function carousel() {
    const slides = document.getElementsByClassName("images");

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    headerss++;
    if (headerss > slides.length) {
        headerss = 1;
    }

    slides[headerss - 1].style.display = "block";
    setTimeout(carousel, 2000); 
}

// Automatic Slideshow for About >> Mission and Vision
let cardIndex = 0;
showSlides();

function showSlides() {
    const cards1 = document.getElementsByClassName("card");
    const cards2 = document.getElementsByClassName("card-2");
    
    for (let i = 0; i < cards1.length; i++) {
        cards1[i].style.display = "none";
    }
    for (let i = 0; i < cards2.length; i++) {
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
    const sidebar = document.getElementById("sidebar");
    sidebar.style.width = (sidebar.style.width === "50%") ? "0" : "50%";
    event.stopPropagation();
};

document.addEventListener("click", function (event) {
    const sidebar = document.getElementById("sidebar");
    const sidebarButton = document.getElementById("sidebarButton");

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

// New Slider Functionality
document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll('#slider .slide');
    let currentSlide = 0;
    const slideInterval = setInterval(nextSlide, 3000);

    function nextSlide() {
        slides[currentSlide].style.display = 'none';
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].style.display = 'block';
    }

    if (slides.length > 0) {
        slides[0].style.display = 'block';
    }
});
document.addEventListener("DOMContentLoaded", function() {
    // Read More functionality
    document.querySelectorAll(".read-more-btn").forEach(function(button) {
        button.addEventListener("click", function() {
            const parent = this.closest('.content-container');
            const fullText = parent.querySelector('.full-text');
            const previewText = parent.querySelector('.preview-text');
            
            if (fullText.style.display === "none" || fullText.style.display === "") {
                fullText.style.display = "block";
                previewText.style.display = "none";
                this.textContent = "Read Less";
            } else {
                fullText.style.display = "none";
                previewText.style.display = "block";
                this.textContent = "Read More";
            }
        });
    });
});


