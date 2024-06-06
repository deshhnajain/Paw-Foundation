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
$photo=$_FILES['photo1']['name'];
$addedtime = date('Y-m-d H:i:s');


if($photo<>'')
			{
				$image1=explode('.',$photo);
				$bannerimage=end($image1);
				$bannerfile=time().'.'.$bannerimage;
				move_uploaded_file($_FILES["photo1"]["tmp_name"],$_SERVER['DOCUMENT_ROOT'].'/Paw-Foundation/changeimgs/' . $bannerfile);
			}else
			{
			$bannerfile='';

}
$sql = "INSERT INTO banner(image , name ,added_time)
VALUES ('$bannerfile' , '$name' , '$addedtime')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

