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
document.getElementById("sidebarButton").onclick = function () {
    var sidebar = document.getElementById("sidebar");
    var button = document.getElementById("sidebarButton");
    if (sidebar.style.width === "50%") {
        sidebar.style.width = "0";
        button.innerHTML = "Signup";
    } else {
        sidebar.style.width = "50%";
        button.innerHTML = "&times;";
    }
};
