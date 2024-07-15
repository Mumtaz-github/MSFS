<?php
/* fonctions.php is a PHP script that contains a set of functions for managing data in a database, 
specifically a MySQL database with the name record. The script defines functions for connecting to the database,
 fetching data, adding new records, updating records, deleting records, and uploading picture files.

The script does not define a database itself, but rather interacts with
 an existing database using PHP Data Objects (PDO) to execute SQL queries.

The functions in fonctions.php can be included in other PHP scripts to perform database operations
 without having to repeat the database connection code and SQL queries. */

// Database connection details
$db_host = "localhost";
$db_user = "admin";
$db_password = "Afpa1234";
$db_name = "record";

// Connect to the database
$dsn = "mysql:host=$db_host;dbname=$db_name";
$username = $db_user;
$password = $db_password;

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     // Add the picture column to the disc table if it doesn't exist
     $stmt = $conn->prepare("ALTER TABLE disc ADD COLUMN IF NOT EXISTS picture VARCHAR(255)");
     $stmt->execute();
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Function to fetch all discs from the "disc" table
function getDiscs() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM disc");
    $stmt->execute();
    $discs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $discs;
}

// Function to fetch details of a disc by its ID
function getDiscById($disc_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM disc WHERE disc_id = :disc_id");
    $stmt->bindParam(":disc_id", $disc_id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result ? $result : false;
}

// Function to fetch all artists from the "artist" table
function getArtists() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM artist");
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

// Function to add a new disc record to the database
// function addDisc($title, $artist_id, $year, $genre, $label, $price, $picture) {
//     global $conn;
//     $stmt = $conn->prepare("INSERT INTO disc (disc_title, artist_id, disc_year, disc_genre, disc_label, disc_price, disc_picture) VALUES (:title, :artist_id, :year, :genre, :label, :price, :picture)");
//     $stmt->bindParam(':title', $title);
//     $stmt->bindParam(':artist_id', $artist_id);
//     $stmt->bindParam(':year', $year);
//     $stmt->bindParam(':genre', $genre);
//     $stmt->bindParam(':label', $label);
//     $stmt->bindParam(':price', $price);
//     $stmt->bindParam(':picture', $picture);
//     if ($stmt->execute()) {
//         return true;
//     } else {
//         return false;
//     }
// }

// Function to update a disc record in the database
function updateDisc($conn, $disc_id, $title, $artist_id, $year, $genre, $label, $price, $picture) {
    $stmt = $conn->prepare("UPDATE disc SET title = :title, artist_id = :artist_id, year = :year, genre = :genre, label = :label, price = :price, picture = :picture WHERE disc_id = :disc_id");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':artist_id', $artist_id);
    $stmt->bindParam(':year', $year);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':label', $label);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':picture', $picture);
    $stmt->bindParam(':disc_id', $disc_id);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to update the picture path for a disc in the database
// Function to update the picture path for a disc in the database
function updateDiscPicture($conn, $disc_id, $picture) {
    try {
        $stmt = $conn->prepare("UPDATE disc SET picture = :picture WHERE disc_id = :disc_id");
        $stmt->bindParam(':picture', $picture);
        $stmt->bindParam(':disc_id', $disc_id);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
        return false;
    }
}

// Function to delete a disc record from the database
function deleteDisc($conn, $disc_id) {
    try {
        $stmt = $conn->prepare("DELETE FROM disc WHERE disc_id = :disc_id");
        $stmt->bindParam(':disc_id', $disc_id);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
        return false;
    }
}

// Function to check if an image file is a actual image or fake image
function validateImage($image) {
    $allowedTypes = array('image/jpeg', 'image/png', 'image/gif');
    $imageType = mime_content_type($image['tmp_name']);
    if (in_array($imageType, $allowedTypes)) {
        return true;
    } else {
        return false;
    }
}




        ?>