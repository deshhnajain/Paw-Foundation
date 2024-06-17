<?php
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

function get_content($conn, $section_key) {
    $sql = "SELECT content FROM website_content WHERE section_key = '$section_key' ORDER BY added_time DESC LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result->fetch_assoc()['content'];
    } else {
        return "";
    }
}

$about_us_content = get_content($conn, 'about_us');
$why_paw_foundation_content = get_content($conn, 'why_paw_foundation');
$mission_content = get_content($conn, 'mission');
$vision_content = get_content($conn, 'vision');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Foundation</title>
    <link rel="icon" href="IMG/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="css/animate.aos.css" />
</head>
<body>

    <!-- Sidebar for Signup Form -->
    <div id="sidebar" class="sidebar">
        <div class="form-container">
            <form id="login-form" class="signup-form" action="phpconnection/login.php" method="post">
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

            <form action="phpconnection/signup.php" method="post" id="signup-form" class="signup-form" style="display: none;">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <h2>Signup to Paw Foundation</h2>
                <div class="field">
                    First Name: <input type="text" value="" name="first_name">
                </div>
                <div class="field">
                    Last Name: <input type="text" name="last_name" value="">
                </div>
                <div class="field">
                    Gender: <select name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="field">
                    Contact Number: <input type="tel" name="contact_number" value="">
                </div>
                <div class="field">
                    Address: <input type="text" name="address" value="address" id="address">
                </div>
                <div class="field">
                    Email: <input type="email" name="email_signup" value="">
                </div>
                <div class="field">
                    Password: <input type="password" name="password_signup" value="">
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
            <img src="IMG/logo.png" alt="logo">
            <div class="logotex">Paw Foundation</div>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#m-v">Mission & Vision</a></li>
            <li><a href="#donet">Donate</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a id="sidebarButton" href="javascript:void(0)">Signup/login</a></li>
        </ul>
    </nav>

    <!-- Slider -->
    <div id="slider" class="slider" data-aos="zoom-in">
        <div>
            <?php 
            $sql = "SELECT * FROM banner";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { 
                    echo '<img class="images" src="changeimgs/' . $row['image'] . '" data-aos="fade-left">';
                } 
            } 
            ?>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="about-us" id="about-us" data-aos="fade-up">
        <div class="max-width">
            <h2 class="title" data-aos="fade-right">About us</h2>
            <div class="contact-content">
                <div class="column left" data-aos="fade-left">
                    <div class="title2">About Paw Foundation</div>
                    <p data-aos="fade-up"><?php echo $about_us_content; ?></p>
                    <div class="button-area">
                        <button type="submit" data-aos="zoom-in">Read more</button>
                    </div>
                </div>
                <div class="column right" data-aos="fade-right">
                    <div class="about-us-logo">
                        <img src="IMG/m3.jpg" alt="About Us Image"> 
                    </div>
                </div>
            </div>
            <hr style="margin: 50px 0;">
            <div class="contact-content">
                <div class="column right" data-aos="fade-left">
                    <div class="about-us-logo img-2">
                        <img src="img/aboutus.png" alt="">
                    </div>
                </div>
                <div class="column left" data-aos="fade-right">
                    <div class="title2">Why Paw Foundation?</div>
                    <p data-aos="fade-up"><?php echo $why_paw_foundation_content; ?></p>
                    <div class="button-area">
                        <button type="submit" data-aos="zoom-in">Read more</button>
                        <button type="submit"><a href="#donet" style="text-decoration: none; color:black" data-aos="zoom-in">Donate</a></button>
                    </div>
                </div>
            </div>
        </div>
    
    <div id="m-v"></div>
            <hr style="margin: 50px 0;">
            <div class="contact-content2">
    <div class="column left" data-aos="fade-left">
                    <div class="title2" style="text-align: center; color: #111;">Our Mission</div>
                    <div class="v-m-img">
                        <?php 
                        $sql = "SELECT * FROM mission";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) { 
                                echo '<img class="card" src="changeimgs/' . $row['image'] . '" alt="Mission Image">';
                            } 
                        } 
                        ?>
                    </div>
                    <p><?php echo $mission_content; ?></p>
                    <div class="button-area">
                        <button type="submit" data-aos="zoom-in">Read more</button>
                    </div>
                </div>

    <div class="column left" data-aos="fade-right">
                   <div class="title2" style="text-align: center; color: #111;">Our Vision</div>
<div class="v-m-img">
    <?php 
    $sql = "SELECT * FROM vision";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { 
            echo '<img class="images" src="changeimgs/' . $row['image'] . '" data-aos="fade-left">';
        } 
    } 
    ?>
</div>

                    <<p><?php echo $vision_content; ?></p>
                    <div class="button-area">
                        <button type="submit" data-aos="zoom-in">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Donate Section -->
    <section class="donet" id="donet" data-aos="fade-up">
        <div class="max-width">
            <div class="title-container" data-aos="fade-right">
                <h2 class="title">Donate Us</h2>
            </div>
            <div class="form-container">
                <form action="phpconnection/donate.php" method="post">
                    <div class="fields" data-aos="fade-left">
                        <div class="field">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="field" data-aos="fade-right">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="field" data-aos="fade-left">
                        <input type="number" name="contact" placeholder="Phone Number" required>
                    </div>
                    <div class="field" data-aos="fade-right">
                        <input type="number" name="amount" placeholder="Enter Amount" required>
                    </div>
                    <div class="field textarea" data-aos="fade-left">
                        <textarea name="why_donate" cols="30" rows="10" placeholder="Why you donate?" required></textarea>
                    </div>
                    <div class="button-area" data-aos="zoom-in">
                        <button type="submit">Donate NGO</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact" data-aos="fade-up">
        <div class="max-width">
            <h2 class="title" data-aos="fade-right">Contact us</h2>
            <div class="column" data-aos="fade-left">
                <div class="icons">
                    <div class="row">
                        <div class="box">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Call on</div>
                                <div class="sub-title">+91 9868793029</div>
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
            <div class="column" data-aos="fade-right">
                <div class="title2">Message Paw Foundation</div>
                <form action="phpconnection/message.php" method="post">
                    <div class="field" data-aos="fade-left">
                        <input type="text" placeholder="Name" name="name" required>
                    </div>
                    <div class="field" data-aos="fade-right">
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="field" data-aos="fade-left">
                        <input type="number" placeholder="Phone number" name="contact" required>
                    </div>
                    <div class="field textarea" data-aos="fade-right">
                        <textarea cols="30" rows="10" placeholder="Message.." name="message" required></textarea>
                    </div>
                    <div class="button-area" data-aos="zoom-in">
                        <button type="submit">Send message</button>
                    </div>
                </form>
            </div>

    <!-- Footer Section -->
    <footer>
        <span class="far fa-copyright"></span> <span style="color: #111;">Paw Foundation</span>&nbsp;|&nbsp;&nbsp;<span>2024 All rights reserved.</span>
    </footer>

    <!-- link js file -->
    <script src="JS/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, 
            once: true, 
            mirror: false, 
        });
    </script>
</body>
</html>
<?php $conn->close(); ?>
