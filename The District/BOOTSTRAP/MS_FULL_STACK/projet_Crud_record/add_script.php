<?php
require_once 'fonctions.php'; // Include your functions file

// Create a PDO connection object
$conn = new PDO('mysql:host=localhost;dbname=record', 'admin', 'Afpa1234');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the form
    $stock = $conn->prepare("SELECT * FROM artist WHERE artist_id = :artist;");
    $stock->bindValue(':artist', $_POST['artist']);
    $stock->execute();

    $artist_id = $stock->fetch()['artist_id'];

    $title = $_POST['title'];
    $artist_id = $artist_id;
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $label = $_POST['label'];
    $price = $_POST['price'];

    // Upload the picture file
    try {
        $picture = uploadPicture($_FILES['picture']);
    } catch (Exception $e) {
        echo "Error uploading picture: " . $e->getMessage();
        exit;
    }

    // Insert the new disc record into the database
    try {
        $result = addDisc($title, $artist_id, $year, $genre, $label, $price, $picture);
    } catch (Exception $e) {
        echo "Error adding disc: " . $e->getMessage();
        exit;
    }

    // Redirect to the list page
    if ($result) {
        header('Location:index.php');
        exit;
    } else {
        echo "Erreur lors de l'ajout du disque.";
    }
} else {
    echo "Accès non autorisé.";
}

// Function to upload the picture
function uploadPicture($file) {
    // Check if the file is uploaded correctly
    if ($file['error'] !== UPLOAD_ERR_OK) {
        throw new Exception("Error uploading file: " . $file['error']);
    }

    // Check if the file type is allowed
    $allowedTypes = array('image/jpeg', 'image/png', 'image/gif');
    if (!in_array($file['type'], $allowedTypes)) {
        throw new Exception("File type not allowed");
    }

    // Check if the file size is within the limit
    $maxFileSize = 1024 * 1024; // 1MB
    if ($file['size'] > $maxFileSize) {
        throw new Exception("File size too large");
    }

    // Upload the file to the directory
    $uploadDir = 'pictures/';
    $fileName = uniqid() . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
    $filePath = $uploadDir . $fileName;
    if (!move_uploaded_file($file['tmp_name'], $filePath)) {
        throw new Exception("Error uploading file to directory: " . $file['tmp_name']);
    }

    return $fileName;
}

// Function to add the disc to the database
function addDisc($title, $artist_id, $year, $genre, $label, $price, $picture) {
    $conn = new PDO('mysql:host=localhost;dbname=record', 'admin', 'Afpa1234');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO disc (disc_title, artist_id, disc_year, disc_genre, disc_label, disc_price, disc_picture) VALUES (:title, :artist_id, :year, :genre, :label, :price, :picture)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':artist_id', $artist_id);
    $stmt->bindParam(':year', $year);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':label', $label);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':picture', $picture);
    $stmt->bindParam(':artist_id', $artist_id);

    try {
        $stmt->execute();
        return true;
    } catch (Exception $e) {
        echo "Error adding disc to database: ". $e->getMessage();
        return false;
    }
}