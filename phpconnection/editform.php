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

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $username = $row["user_name"];
    $gender = $row["user_gender"];
    $contact_number = $row["user_contact"];
    $address = $row["user_add"];
    $email = $row["user_email"];
    $addedtime = $row["added_time"];


  }  } else { $username = "";
    $gender = "";
    $contact_number = "";
    $address = "";
    $email = "";
    $addedtime = "";
}

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
    <form action="update.php" method="post" id="signup-form" class="signup-form">
        <h2>Signup to Paw Foundation</h2>
        <div class="field">
            First Name: <input type="text" value="<?php echo $username; ?>" name="first_name">
        </div>
        <div class="field">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="field">
            Gender: 
            <select name="gender" id="gender">
                <option value="Male" <?php if ($gender == 'Male') echo "selected"; ?>>Male</option>
                <option value="Female" <?php if ($gender == 'Female') echo "selected"; ?>>Female</option>
                <option value="Other" <?php if ($gender == 'Other') echo "selected"; ?>>Other</option>
            </select>
        </div>
        <div class="field">
            Contact Number: <input type="tel" name="contact_number" value="<?php echo $contact_number; ?>">
        </div>
        <div class="field">
            Address: <input type="text" name="address" value="<?php echo $address; ?>" id="address">
        </div>
        <div class="field">
            Email: <input type="email" name="email_signup" value="<?php echo $email; ?>">
        </div>
        <div class="button-area">
            <input type="submit" value="Signup">
        </div>
        <div class="button-area">
            <button type="button" id="showLoginForm">Login</button>
        </div>
    </form>
</body>
</html>