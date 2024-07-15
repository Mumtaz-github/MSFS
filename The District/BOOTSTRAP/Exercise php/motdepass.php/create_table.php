<?php
// Connexion à la base de données
$dsn = 'ysql:host=localhost;dbname=mydb';
$dsn = 'ysql:host=localhost;dbname=mydb;charset=utf8';
$username = 'yuser';
$password = 'ypassword';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Erreur de connexion : '. $e->getMessage();
    exit;
}

// Création de la table user
$sql = 'CREATE TABLE IF NOT EXISTS user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
)';
$pdo->exec($sql);
?>