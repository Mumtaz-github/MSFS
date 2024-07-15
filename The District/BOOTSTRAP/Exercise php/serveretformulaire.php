<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fichier" />
    <input type="submit" value="Uploader" />
</form>
<?php


var_dump($_FILES);
?>


< ?php
<!-- $tmp_file = $_FILES['image']['tmp_name'];
$target_dir = 'images/';
$target_file = $target_dir. uniqid(). '.jpg'; // rename the file with a unique id and.jpg extension

if (move_uploaded_file($tmp_file, $target_file)) {
    echo "File uploaded and moved successfully!";
} else {
    echo "Error uploading file!";
} -->
? >







</body>

</html>