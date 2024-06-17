<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Content</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="upload-container">
        <h2>Upload Content</h2>
        <form action="savetext.php" method="post">
            <label for="section_key">Select Section:</label>
            <select id="section_key" name="section_key">
                <option value="about_us">About Us</option>
                <option value="why_paw_foundation">Why Paw Foundation</option>
                <option value="mission">Mission</option>
                <option value="vision">Vision</option>
            </select>

            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="10" required></textarea>

            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
