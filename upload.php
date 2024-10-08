<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profile_name" id="formFile"><br>
        <button type="submit" name="upload" value="upload File">Upload</button>
    </form>

</body>

</html>

<?php

if (isset($_FILES["profile_name"])) {
    $filename = $_FILES["profile_name"]["name"];
    $tempname = $_FILES["profile_name"]["tmp_name"];
    $folder = "image/" . $filename;

    // Attempt to move the uploaded file
    if(move_uploaded_file($tempname, $folder)){
        echo "File uploaded successfully!";
    }else{
        echo "File does not uploaded!";
   
    }
       

}
?>