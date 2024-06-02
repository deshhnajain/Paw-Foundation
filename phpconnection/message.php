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

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];
$addedtime = date('Y-m-d H:i:s');



$sql = "INSERT INTO message(name, email, contact, message, added_time)

VALUES ('$name', '$email', '$contact', '$message', '$addedtime')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>
