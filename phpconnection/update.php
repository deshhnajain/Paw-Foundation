<?php
$userid = $_GET['editid'];
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
$gender = $_POST['gender'];
$contact_number = $_POST['contact_number'];
$address = $_POST['address'];
$email = $_POST['email_signup'];
$addedtime = date('Y-m-d H:i:s');



$sql = "UPDATE signup SET user_name = '$first_name' , user_gender='$gender', user_cont='$contact_number', user_add='$address', user_email='$email', added_time='$addedtime' WHERE user_id='$userid' ";

 



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>
