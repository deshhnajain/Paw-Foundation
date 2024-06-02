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
$amount = $_POST['amount'];
$why_donate = $_POST['why_donate'];
$addedtime = date('Y-m-d H:i:s');



$sql = "INSERT INTO donation(name, email, contact, amount, why_donate, added_time)

VALUES ('$name', '$email' , '$contact', '$amount', '$why_donate', '$addedtime')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>
