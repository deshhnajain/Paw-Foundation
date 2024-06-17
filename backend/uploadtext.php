<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Upload Form</title>
</head>
<body>
    <form action="save.php" method="post" id="contentForm" enctype="multipart/form-data">
        <h2>Upload Content:</h2>

        <!-- Section Key Selector -->
        <div class="section-input">
            <label for="section_key">Select Section:</label>
            <select id="section_key" name="section_key">
                <option value="about_us">About Us</option>
                <option value="why_paw_foundation">Why Paw Foundation</option>
                <option value="mission_text">Mission Text</option>
                <option value="vision_text">Vision Text</option>
                <option value="contact_call">Contact Us (Call)</option>
                <option value="contact_address">Contact Us (Address)</option>
                <option value="contact_email">Contact Us (Email)</option>
            </select><br><br>
        </div>

        <!-- Content Input -->
        <div class="content-input">
            <label for="content">Enter Content:</label>
            <textarea id="content" name="content" rows="4" cols="50" placeholder="Enter the text content for the selected section"></textarea><br><br>
        </div>

        <!-- Photo Upload for Sections with Images (optional) -->
        <div class="photo-input">
            <label for="photo">Upload a photo (optional):</label>
            <input type="file" id="photo" name="photo" accept="image/*"><br><br>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
