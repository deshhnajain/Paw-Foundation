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
$sql = "SELECT * FROM signup";
$result = $conn->query($sql);


// Query for donate table
$sql_donate = "SELECT * FROM donation";
$result_donate = $conn->query($sql_donate);

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
 $i=1;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>

  <tr>
    <td><?php echo $i;  ?></td>
    <td><?php echo $row["user_name"];  ?></td>
    <td><?php echo $row["user_gender"];  ?></td>
    <td><?php echo $row["user_contact"];  ?></td>
    <td><?php echo $row["user_add"];  ?></td>
    <td><?php echo $row["user_email"];  ?></td>
    <td><?php echo $row["added_time"];  ?></td>
    <td> <a href="editform.php?editid=<?php echo $row["user_id"];  ?>">edit</a></td>
    
  </tr>
  <?php  
$i++;

}}
  ?>
</table >
<br><br>
<table>
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
 $i=1;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>

  <tr>
    <td><?php echo $i;  ?></td>
    <td><?php echo $row["name"];  ?></td>
    <td><?php echo $row["email"];  ?></td>
    <td><?php echo $row["contact"];  ?></td>
    <td><?php echo $row["amount"];  ?></td>
    <td><?php echo $row["reason"];  ?></td>
    <td><?php echo $row["added_time"];  ?></td>
  </tr>
  <?php  
$i++;

}}
  ?>
  





</table>
</body>
</html>