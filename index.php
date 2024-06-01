<?php

$id = $_GET['editid'];
$servername = "localhost";

$username = "root";
$password = "";
$database = "pawfoundation";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}
echo "connected";
$sql = "SELECT * FROM signup WHERE user_id = '$id'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Foundation</title>
    <!-- link for tab logo -->
    <link rel="icon" href="IMG/logo.png" type="image/x-icon">
    <!-- link css file  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- link for icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<body>

    <!-- Sidebar for Signup Form -->
    <div id="sidebar" class="sidebar">
        <div class="form-container">
            <form id="login-form" class="signup-form">
                <h2>Login to Paw Foundation</h2>
                <div class="field">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="button-area">
                    <input type="submit" value="Login">
                </div>
                <div class="button-area">
                    <button type="button" id="showSignupForm">Signup</button>
                </div>
            </form>

            <form action="phpconnection/update.php" method="post" id="signup-form" class="signup-form" style="display: none;" >
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <h2>Signup to Paw Foundation</h2>
                <div class="field" style="margin-top: 20;">
                    First Name: <input type="text" value="" name="first_name">
                </div>
                <div class="field">
                    Last Name: <input type="text" name="last_name" value="">
                </div>
                <div class="field">
                    Gender: <select name="gender" id="gender" >
        <option value="Male"  >Male</option>
            <option value="Female" >Female</option>
            <option value="Other" >Other</option>
                </div><br><br>
                <div class="field">
                    Contact Number: <input type="tel" name="contact_number"  value="" >
                </div>
                <div class="field">
                     address: <input type="text" name="address" value="address" id="address">
                </div>
                <div class="field">
                   Email: <input type="email" name="email_signup" value="" >
                </div>
                <div class="button-area">
                    <input type="submit" value="Signup">
                </div>
                <div class="button-area">
                    <button type="button" id="showLoginForm">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav>
        <div id="navbar" class="logo">
            <button id="sidebarButton" class="openbtn">Signup</button>
            <img src="IMG/logo.png" alt="logo">
            <div class="logotex">Paw Foundation</div>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#m-v">Mission & Vision</a></li>
            <li><a href="#donet">Donate</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Slider -->
    <div id="slider" class="slider">
        <div>
            <img class="images" src="IMG/sl1.jpg">
            <img class="images" src="IMG/sl2.jpg">
            <img class="images" src="IMG/sl3.jpeg">
        </div>
    </div>

    <!-- About Us Section -->
    <section class="about-us" id="about-us">
        <div class="max-width">
            <h2 class="title">About us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="title2">About Paw Foundation</div>
                    <p>Paw Foundation is a dedicated non-profit organization committed to the welfare and protection of dogs. Established with a mission to create a safer and more compassionate world for our furry friends, we focus on rescuing, rehabilitating, and rehoming dogs in need.<br><br> At Paw Foundation, we believe every dog deserves a chance at a happy, healthy life. Our adoption services carefully match dogs with loving families, ensuring a perfect fit for both the pet and the owner. </p>
                    <div class="button-area">
                        <button type="submit">Read more</button>
                    </div>
                </div>
                <div class="column right">
                    <div class="about-us-logo">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <hr style="margin: 50px 0;">
            <div class="contact-content">
                <div class="column right">
                    <div class="about-us-logo img-2">
                        <img src="img/aboutus.png" alt="">
                    </div>
                </div>
                <div class="column left">
                    <div class="title2">Why Paw Foundation ?</div>
                    <p>Choosing Paw Foundation means supporting a dedicated organization We go beyond the basics of rescue by focusing on long-term solutions, such as community education and advocacy for responsible pet ownership, which address the root causes of dog abandonment and mistreatment.<br><br>By choosing Paw Foundation, you are joining a community that is passionate about making a tangible difference in the lives of dogs. We believe in transparency and accountability, regularly updating our supporters on the progress and impact of our initiatives.</p>
                    <div class="button-area">
                        <button type="submit">Read more</button>
                        <button type="submit"><a href="#donet" style="text-decoration: none; color:black">Donate</a></button>
                    </div>
                </div>
            </div>
            <div id="m-v"></div>
            <hr style="margin: 50px 0;">
            <div class="contact-content2">
                <div class="column left">
                    <div class="title2" style="text-align: center; color: #111;">Our Mission</div>
                    <div class="v-m-img">
                        <img class="card" src="img/m1.png" alt="">
                        <img class="card" src="img/m2.jpg" alt="">
                        <img class="card" src="img/m3.jpg" alt="">
                        <img class="card" src="img/m4.jpeg" alt="">
                        <img class="card" src="img/m5.jpeg" alt="">
                    </div>
                    <p>Our mission is to rescue, rehabilitate, and rehome dogs in need...</p>
                    <div class="button-area">
                        <button type="submit">Read more</button>
                    </div>
                </div>
                <div class="column left">
                    <div class="title2" style="text-align: center; color: #111;">Our Vision</div>
                    <div class="v-m-img">
                        <img class="card-2" src="img/v1.jpeg" alt="">
                        <img class="card-2" src="img/v2.jpeg" alt="">
                        <img class="card-2" src="img/v3.jpeg" alt="">
                        <img class="card-2" src="img/v4.jpg" alt="">
                        <img class="card-2" src="img/v5.jpg" alt="">
                    </div>
                    <p>Our vision is a world where every dog is loved...</p>
                    <div class="button-area">
                        <button type="submit">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donate Section -->
    <section class="donet" id="donet">
        <div class="max-width">
            <div class="title-container">
                <h2 class="title">Donate Us</h2>
            </div>
            <div class="form-container">
                <form action="#">
                    <div class="fields">
                        <div class="field">
                            <input type="text" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <input type="number" placeholder="Phone Number" required>
                    </div>
                    <div class="field">
                        <input type="number" placeholder="Enter Amount" required>
                    </div>
                    <div class="fields">
                        <div class="field">
                            <input type="text" placeholder="Bank Name" required>
                        </div>
                        <div class="field">
                            <input type="number" placeholder="ISFC Number" required>
                        </div>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Why you donate?" required></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit">Donate NGO</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact us</h2>
            <div class="column">
                <div class="icons">
                    <div class="row">
                        <div class="box">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Call on</div>
                                <div class="sub-title">+91 63894 56210</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="box">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Delhi, India</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="box">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">deshjain@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="title2">Message Paw Foundation</div>
                <form action="#">
                    <div class="field">
                        <input type="text" placeholder="Name" required>
                    </div>
                    <div class="field">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <input type="number" placeholder="Phone number" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <span class="far fa-copyright"></span> <span style="color: #111;">Paw Foundation</span>&nbsp;|&nbsp;&nbsp;<span>2021 All rights reserved.</span>
    </footer>

    <!-- link js file -->
    <script src="JS/script.js"></script>
</body>
</html>
