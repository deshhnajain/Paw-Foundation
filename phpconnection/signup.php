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

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$contact_number = $_POST['contact_number'];
$address = $_POST['address'];
$email = $_POST['email_signup'];
$password = $_POST['password_signup']; // Add password field in signup form
$name = $first_name." ".$last_name;
$addedtime = date('Y-m-d H:i:s');

$sql = "INSERT INTO signup(user_name, user_gender, user_contact, user_add, user_email, user_pass, added_time)
VALUES ('$name', '$gender' , '$contact_number', '$address', '$email', '$password', '$addedtime')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
