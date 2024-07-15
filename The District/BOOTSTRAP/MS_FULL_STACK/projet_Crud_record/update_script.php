<?php
require_once 'fonctions.php'; // Include your functions file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the form
    $disc_id = $_POST['disc_id'];
    $title = $_POST['title'];
    $artist_id = $_POST['artist'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $label = $_POST['label'];
    $price = $_POST['price'];
    $old_picture = $_POST['old_picture'];

    // Upload the picture file (if a new picture is provided)
    if (isset($_FILES['picture']) && $_FILES['picture']['size'] > 0) {
        $picture = uploadPicture($_FILES['picture']);
        // Update the picture path in the database
        updateDiscPicture($conn, $disc_id, $picture);
    } else {
        // No new picture uploaded, keep the existing one
        $picture = $old_picture;
    }

    // Update the disc record in the database
    $result = updateDisc($conn, $disc_id, $title, $artist_id, $year, $genre, $label, $price, $picture);

    // Redirect to the details page
    if ($result) {
        header('Location: details.php?disc_id='. $disc_id);
        exit;
    } else {
        echo "Erreur lors de la modification du disque.";
    }
} else {
    echo "Accès non autorisé.";
}

// Function to upload a picture file
function uploadPicture($file) {
    // Check if the file is an image
    if ($file['type']!= 'image/jpeg' && $file['type']!= 'image/png') {
        echo "Erreur : le fichier doit être une image (JPEG ou PNG).";
        return false;
    }

    // Check if the file is too large
    if ($file['size'] > 1024 * 1024) {
        echo "Erreur : le fichier est trop volumineux (max 1Mo).";
        return false;
    }

    // Upload the file to the "pictures" directory
    $upload_dir = 'pictures/';
    $filename = uniqid(). '_'. $file['name'];
    $upload_file = $upload_dir. $filename;

    if (move_uploaded_file($file['tmp_name'], $upload_file)) {
        return $upload_file;
    } else {
        echo "Erreur lors de l'upload du fichier.";
        return false;
    }
}
?>