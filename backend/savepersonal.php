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

// Check if section_key and content are set in POST request
if (!empty($_POST['section_key']) && !empty($_POST['content'])) {
    $section_key = $conn->real_escape_string($_POST['section_key']);
    $content = $conn->real_escape_string($_POST['content']);

    // Check if section already exists
    $sql_check = "SELECT * FROM personal_info WHERE section_key = '$section_key'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        // Update existing section
        $sql = "UPDATE personal_info SET content = '$content' WHERE section_key = '$section_key'";
    } else {
        // Insert new section
        $sql = "INSERT INTO personal_info (section_key, content) VALUES ('$section_key', '$content')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated/inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Section key and content are required.";
}

$conn->close();
?>
