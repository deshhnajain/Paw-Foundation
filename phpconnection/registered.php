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

// Query for signup table
$sql_signup = "SELECT * FROM signup";
$result_signup = $conn->query($sql_signup);

// Query for donation table
$sql_donate = "SELECT * FROM donation";
$result_donate = $conn->query($sql_donate);

$sql_message = "SELECT * FROM message";
$result_message = $conn->query($sql_message);


?>
<html>
<head><title>table</title></head>
<style>
table, th, td {
  border:1px solid black;
}
</style>

<body>
<table>
  <tr>
    <th>sno.</th>
    <th>name</th>
    <th>gender</th>
    <th>contact_number</th>
    <th>address</th>
    <th>email</th>
    <th>addedtime</th>
    <th>edit</th>
  </tr>

<?php  
$i = 1;

if ($result_signup->num_rows > 0) {
    while($row = $result_signup->fetch_assoc()) {
?>

  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row["user_name"]; ?></td>
    <td><?php echo $row["user_gender"]; ?></td>
    <td><?php echo $row["user_contact"]; ?></td>
    <td><?php echo $row["user_add"]; ?></td>
    <td><?php echo $row["user_email"]; ?></td>
    <td><?php echo $row["added_time"]; ?></td>
    <td><a href="editform.php?editid=<?php echo $row["user_id"]; ?>">edit</a></td>
  </tr>

<?php  
    $i++;
    }
}
?>

</table>

<br><br>

<table>
  <tr>
    <th>sno.</th>
    <th>name</th>
    <th>email</th>
    <th>contact</th>
    <th>amount</th>
    <th>reason</th>
    <th>addedtime</th>
  </tr>

<?php  
$i = 1;

if ($result_donate->num_rows > 0) {
    while($row = $result_donate->fetch_assoc()) {
?>

  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["contact"]; ?></td>
    <td><?php echo $row["amount"]; ?></td>
    <td><?php echo $row["why_donate"]; ?></td>
    <td><?php echo $row["added_time"]; ?></td>
  </tr>

<?php  
    $i++;
    }
} 
?>

</table>
<br>
<table>
  <tr>
    <th>sno.</th>
    <th>name</th>
    <th>email</th>
    <th>contact</th>
    <th>message</th>
    <th>addedtime</th>
  </tr>

<?php  
$i = 1;

if ($result_message->num_rows > 0) {
    while($row = $result_message->fetch_assoc()) {
?>

  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["contact"]; ?></td>
    <td><?php echo $row["message"]; ?></td>
    <td><?php echo $row["added_time"]; ?></td>
  </tr>

<?php  
    $i++;
    }
} 
?>

</table>
</body>
</html>
