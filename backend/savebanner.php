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

$addedtime = date('Y-m-d H:i:s');

// Banner photo upload
if (!empty($_FILES['photo1']['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    $photo = $_FILES['photo1']['name'];
    $image1 = explode('.', $photo);
    $bannerimage = end($image1);
    $bannerfile = time() . '.' . $bannerimage;
    move_uploaded_file($_FILES["photo1"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . '/Paw-Foundation/changeimgs/' . $bannerfile);

    $sql = "INSERT INTO banner (image, name, added_time) VALUES ('$bannerfile', '$name', '$addedtime')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Mission photo upload
if (!empty($_FILES['photo_mission']['name']) && !empty($_POST['name_mission'])) {
    $name_mission = $_POST['name_mission'];
    $photo_mission = $_FILES['photo_mission']['name'];
    $image_mission = explode('.', $photo_mission);
    $missionimage = end($image_mission);
    $missionfile = time() . '_mission.' . $missionimage;
    move_uploaded_file($_FILES["photo_mission"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . '/Paw-Foundation/changeimgs/' . $missionfile);

    $sql_mission = "INSERT INTO mission (image, name, added_time) VALUES ('$missionfile', '$name_mission', '$addedtime')";

    if ($conn->query($sql_mission) === TRUE) {
        echo "Mission photo uploaded successfully";
    } else {
        echo "Error: " . $sql_mission . "<br>" . $conn->error;
    }
}

// Vision photo upload
if (!empty($_FILES['photo_vision']['name']) && !empty($_POST['name_vision'])) {
    $name_vision = $_POST['name_vision'];
    $photo_vision = $_FILES['photo_vision']['name'];
    $image_vision = explode('.', $photo_vision);
    $visionimage = end($image_vision);
    $visionfile = time() . '_vision.' . $visionimage;
    move_uploaded_file($_FILES["photo_vision"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . '/Paw-Foundation/changeimgs/' . $visionfile);

    $sql_vision = "INSERT INTO vision (image, name, added_time) VALUES ('$visionfile', '$name_vision', '$addedtime')";

    if ($conn->query($sql_vision) === TRUE) {
        echo "Vision photo uploaded successfully";
    } else {
        echo "Error: " . $sql_vision . "<br>" . $conn->error;
    }
}

$conn->close();
?>
