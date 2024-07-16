<?php
require_once('database.php'); // Include the database.php file
require_once('DAO.php');


function getDishDetails($id) {
    $dao = new DAO($GLOBALS['conn']);
    return $dao->getDishById($id);
}
$id = $_GET['id']; // Validate and sanitize this input
$dish = getDishDetails($id);

$id = $_GET['id']; // Validate and sanitize this input
$dish = getDishDetails($id);
       
       // display the dish image
       $dishImage = $dish['image'];
       
       ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/plats.css">
</head>

<body>
    <?php require_once('../PHP/header.php') ?>
    <!-- <!<video id="video" class="mx-auto" src="../IMG/video.mp4" style="width: 100%; height: 35vh;" playsinline autoplay
    loop muted></video> -->
    <div class="container mt-5 p-5" style="justify-content: center;">
        <div class="card mb-5 text-center mx-auto p-5" style="max-width: 750px; background-color:#ff8c00">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/<?= $dishImage;?>" class="img-fluid" alt="...">
                    <!--si on delete pill the will ne behind another plac of color-->
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><?= $dish['libelle']; ?></h4>
                        <p class="card-text"><?= $dish['description']; ?></p>
                        <div class="d-flex justify-content-end mt-auto p-4">
                            <label> Quantité:</label>
                            <input type="number" style="width: 15%;" id="tentacles" name="tentacles" min="0" max="80">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="formule" class="row g-3" action="Commandeformularie.php" method="post">
            <div class="col-md-12">
                <label for="i" class="form-label">Nom et Prénom</label>
                <input type="text" name="NomPrenom" class="form-control" id="i" style="background-color: rgb(174, 214, 236);">
                <span>ce champ est obligatoire</span>
            </div>
            <div class="col-md-6">
                <label for="j" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="j" style="background-color: rgb(174, 214, 236);">
                <span>ce champ est obligatoire</span>
            </div>
            <div class="col-md-6">
                <label for="k" class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="k" style="background-color: rgb(174, 214, 236);">
                <span>ce champ est obligatoire</span>
            </div>
            <div class="col-md-12">
                <label for="l" class="form-label">Votre Demande</label>
                <textarea name="demande" class="form-control" id="l" rows="3" style="background-color: rgb(174, 214, 236);"></textarea>
                <span>ce champ est obligatoire</span>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn rounded-pill btn-dark btn-sm float-end" id="commande">Envoyer</button>
                <!--class="btn btn-primary-->
            </div>
        </form>
    </div>
    <?php require_once('footer.php') ?>
    

</html>