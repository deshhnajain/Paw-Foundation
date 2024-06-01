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
    <td> <a href="index.php?editid=<?php echo $row["user_id"];  ?>">edit</a></td>
    
  </tr>
  <?php  
$i++;

}}
  ?>
</table >
</body>
</html>