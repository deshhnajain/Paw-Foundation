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
        <label for="photo1">Upload a photo:</label>
            <input type="file" id="photo1" name="photo1" accept="image/*"><br><br>
            <input type="text" name="name" , id="name" placeholder="name">
        </div>
        
        <button type="submit">Upload</button>
    </form>


    


</body>
</html>
