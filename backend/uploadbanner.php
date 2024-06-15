<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Upload Form</title>
</head>
<body>
    <form action="savebanner.php" method="post" id="photoForm" enctype="multipart/form-data">
        <h2>Photo Upload for Slideshow:</h2>
        <div class="photo-input">
            <label for="photo1">Upload a photo for slideshow:</label>
            <input type="file" id="photo1" name="photo1" accept="image/*"><br><br>
            <input type="text" name="name" id="name" placeholder="name"><br><br>
        </div>
        
        <h2>Photo Upload for Mission:</h2>
        <div class="photo-input">
            <label for="photo_mission">Upload a photo for mission:</label>
            <input type="file" id="photo_mission" name="photo_mission" accept="image/*"><br><br>
            <input type="text" name="name_mission" id="name_mission" placeholder="name"><br><br>
        </div>

        <h2>Photo Upload for Vision:</h2>
        <div class="photo-input">
            <label for="photo_vision">Upload a photo for vision:</label>
            <input type="file" id="photo_vision" name="photo_vision" accept="image/*"><br><br>
            <input type="text" name="name_vision" id="name_vision" placeholder="name"><br><br>
        </div>
        
        <button type="submit">Upload</button>
    </form>
</body>
</html>
