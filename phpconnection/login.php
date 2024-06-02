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

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM signup WHERE user_email='$email' AND user_pass='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    echo "Login successful. Welcome, " . $email . "!";
   
} else {
    // Login failed
    echo "Invalid email or password.";
}

$conn->close();
?>
