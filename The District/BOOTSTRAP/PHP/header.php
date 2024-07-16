<!DOCTYPE html>
<?php
session_start();
require_once('DAO.php');

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "the_district";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The District</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    if ($_SERVER['REQUEST_URI'] == "/PHP/Accueil.php") {
        echo
        '<link rel="stylesheet" href="../CSS/district.css">';
    } else {
        echo
        '<link rel="stylesheet" href="../CSS/plats.css">';
    }
    ?>
</head>
<body>
    <div class="parallax">
        <div class="container-fluid g-1">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid justify-content-evenly">
                    <img src="../IMG/img brand/logo_transparent.png" alt="logo" width="180">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 topnav-centered">
                            <li class="nav-item">
                                <a class="nav-link mx-md-4 <?php if($_SERVER['REQUEST_URI'] == "/PHP/Accueil.php") {echo "active";}?> espace"  href="Accueil.php">ACCUEIL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-md-4 <?php if($_SERVER['REQUEST_URI'] == "/PHP/categorie.php"||$_SERVER['REQUEST_URI'] == "/PHP/Asiatique.php" ||$_SERVER['REQUEST_URI'] == "/PHP/Burger.php" ||$_SERVER['REQUEST_URI'] == "/PHP/Pasta.php" ||$_SERVER['REQUEST_URI']
                                 == "/PHP/Pizza.php"||$_SERVER['REQUEST_URI'] == "/PHP/Salade.php"||$_SERVER['REQUEST_URI'] == "/PHP/Sandwich.php"||$_SERVER['REQUEST_URI'] == "/PHP/Veggie.php"||$_SERVER['REQUEST_URI'] == "/PHP/Wrap.php") {echo "active";}?> espace "  href="categorie.php">CATEGORIE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-md-4 <?php if($_SERVER['REQUEST_URI'] == "/PHP/plats.php") {echo "active";}?> espace " href="plats.php">PLATS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-md-4 <?php if($_SERVER['REQUEST_URI'] == "/PHP/Contact.php") {echo "active";}?> espace "  href="Contact.php">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="image-container">  
    <?php if ($_SERVER['REQUEST_URI']!= "/PHP/Commande.php"){?>
        <!--<div class="card no-hover" style="background-color:black;"> 

            <!--<video id="video" class="col-12" src="../IMG/video.mp4" style="width: 100%; height: 35vh;"
                playsinline autoplay loop muted></video> <!-- pour le video style="width: 100vmax; height: 35vh-->
                
            <video id="video" class="col-12" src="../IMG/large.mp4" style="width: 100%; height: 40vh;"
                playsinline autoplay loop muted></video> 
        <?php }?>
        <?php if($_SERVER['REQUEST_URI'] == "/PHP/Accueil.php") {?>
            <div class="ongletrecherche"> 
                <input class="form-control me rounded-pill" type="search" placeholder="Search" aria-label="Search">
            </div>
        <?php }?>
    </div>

