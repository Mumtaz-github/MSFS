<?php
session_start();
require_once('header.php');

// Establish a connection to the database
$dsn = 'mysql:host=localhost;dbname=district';
$username = 'Admin';
$password = 'Afpa1234';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erreur lors de la connexion à la base de données : '. $e->getMessage();
    die(); // Exit on error
}

// Function to insert a new plat
function insert_plat($new_plat, $checkpict, $conn) {
    $stock = $checkpict == 1 ? 'plat' : null;
    if ($stock) {
        stock_image($new_plat['image'], $stock);
    }

    $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, id_categorie, active) 
                                        VALUES (:libelle, :description, :prix, :image, :id_categorie, :active);");
        
    $stmt->execute($new_plat); // Using execute with an array
}

// Function to update a plat
function update_plat($upd_plat, $checkpict, $conn) {
    $stock = $checkpict == 1 ? 'plat' : null;
    if ($stock) {
        stock_image($upd_plat['image'], $stock);
    }

    $stmt = $conn->prepare("UPDATE plat 
                                    SET libelle = :libelle, description = :description, prix = :prix, image = :image, id_categorie = :id_categorie, active = :active
                                        WHERE id_plat = :id_plat;");
   
    $stmt->execute($upd_plat); // Using execute with an array
}

// Function to delete a plat
function delete_plat($del_plat, $conn) {
    $stmt = $conn->prepare('DELETE 
    FROM plat
    WHERE id_plat = :id_plat');
    $stmt->execute([':id_plat' => $del_plat]); // Using execute with an array
}

// Function to insert a new categorie
function insert_categorie($new_categorie, $checkpict, $conn) {
    $stock = $checkpict == 1 ? 'categorie' : null;
    if ($stock) {
        stock_image($new_categorie['image'], $stock);
    }

    $stmt = $conn->prepare("INSERT INTO categorie (libelle, image, active) 
                                        VALUES (:libelle, :image, :active);");

    $stmt->execute($new_categorie); // Using execute with an array
}

// Function to update a categorie
function update_categorie($upd_categorie, $checkpict, $conn) {
    $stock = $checkpict == 1 ? 'categorie' : null;
    if ($stock) {
        stock_image($upd_categorie['image'], $stock);
    }

    $stmt = $conn->prepare("UPDATE categorie 
                                    SET libelle = :libelle, image = :image, active = :active
                                        WHERE id_categorie = :id_categorie;");
   
    $stmt->execute($upd_categorie); // Using execute with an array
}

// Function to stock an image
function stock_image($image, $stock) {
    $target_dir = "images/$stock/";
    $target_file = $target_dir. basename($image);
    move_uploaded_file($image, $target_file);
}

// Close the database connection
$conn = null;