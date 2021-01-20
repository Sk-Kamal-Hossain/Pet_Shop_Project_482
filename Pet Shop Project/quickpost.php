<?php
require_once 'database.php';
if (isset($_POST['submit'])) {
    $image = $_FILES['image']['name'];
    $description = $_POST['description'];
    $target = "images/" . basename($image);
    $sql = "INSERT INTO animals (image, description) VALUES ('$image', '$description')";
    mysqli_query($conn, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
    echo $msg;

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    

    <title>Document</title>
  
</head>

<body>
    <div id="QuickPost" class="tabcontent">
        <h3>Seller Quick Post</h3>
        <div class="container">
            <div class="imgcontainer">
                <img src="White_Persian_Cat.jpg" alt="Avatar" class="avatar">
            </div>
            <form method="POST" action="quickpost.php" enctype="multipart/form-data">
                <h1> PLease Insert your img file </h1>

                <div>
                    <p> Write Your PET'S Price , Address and Contact Number in the Box for Buyer. </p>
                </div>
                <b>ABOUT</b>
                <textarea name="description"> </textarea>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input type="file" class="file-upload-field" value="" name="image">
                </div>
                <div>
                    <input type="submit" name="submit">Submit</input>
            </form>
        </div>
    </div>
    </div>


</body>

</html>