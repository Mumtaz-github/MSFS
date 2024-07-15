
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de fichier</title>
</head>

<body>
<form action="test.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fichier" />
    <input type="submit" value="Envoyer" />
</form>
</body>

</html>