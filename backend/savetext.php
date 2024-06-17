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

// Check if section_key and content are set in POST request
if (!empty($_POST['section_key']) && !empty($_POST['content'])) {
    $section_key = $conn->real_escape_string($_POST['section_key']);
    $content = $conn->real_escape_string($_POST['content']);

    // Check if section already exists
    $sql_check = "SELECT * FROM website_content WHERE section_key = '$section_key'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        // Update existing section
        $sql = "UPDATE website_content SET content = '$content', added_time = '$addedtime' WHERE section_key = '$section_key'";
    } else {
        // Insert new section
        $sql = "INSERT INTO website_content (section_key, content, added_time) VALUES ('$section_key
