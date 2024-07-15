<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WRAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=" ../CSS/plats.css">
</head>

<body>
    <?php require_once('../PHP/header.php') ?>
    <!-- <img class="imagedefond img-fluid" src="../IMG/bg2.jpeg" height="10px" width="100%" position="relative:">-->

    <!-- <video id="video" class="mx-auto" src="../IMG/video.mp4" style="width: 100%; height: 35vh;" playsinline autoplay loop muted></video> -->
    <h1 class="text-center">WRAP </h1>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="card mb-2 ">
                    <img src="../platscategorieimag/img-wrap/wrap-crudivore.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">WRAP CRUDIVORE</h6>
                        <p class="card-text">Ce plat est composé de.</p>
                        <a href="../PHP/Commande.php" id="wrap01" class="btn rounded-pill btn-dark">COMMANDER</a>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="card">
                    <img src="../platscategorieimag/img-wrap/wrap-epinards.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">WRAP EPINARDS</h6>
                        <p class="card-text">Ce plat est composé de.</p>
                        <a href="../PHP/Commande.php" id="wrap02" class="btn rounded-pill btn-dark">COMMANDER</a>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="card">
                    <img src="../platscategorieimag/img-wrap/wr-express-facon-croque.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">WRAP EXPRESS FACON CROQUE</h6>
                        <p class="card-text">Ce plat est composé de.</p>
                        <a href="../PHP/Commande.php" id="wrap03" class="btn rounded-pill btn-dark">COMMANDER</a>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="card ">
                    <img src="../platscategorieimag/img-wrap/wraps-poulet-avocat.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">WRAP POULET AVOCAT</h6>
                        <p class="card-text">Ce plat est composé de.</p>
                        <a href="../PHP/Commande.php" id="wrap04" class="btn rounded-pill btn-dark">COMMANDER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****************buttons *************-->
    <div class="container mt-4 mb-4">

        <!-- <div class="row justify-content-evenly mt-2">
            <button class=" btn btn-dark btn-lg rounded-pill col-md-2 col-4" type="button" id="precedent"><a class="link-info link-offset-2 link-underline link-underline-opacity-0" href="Veggie.php">precedent</a></button>
            <button class=" btn btn-dark btn-lg rounded-pill col-md-2 col-4" type="button" id="suivant"><a class="link-info link-offset-2 link-underline link-underline-opacity-0" href="Asiatique.php"> suivant</a></button>
        </div>
<<<<<<< HEAD
    </div>-->
        <!--this one is non link, you click on any corner of button its work-->
        <form class="row justify-content-evenly mt-2">
            <button id="precedent" class=" btn btn-dark btn-lg rounded-pill col-md-2 col-4" type="submit" formaction="Veggie.php">precedent</button>
            <button id="suivant" class=" btn btn-dark btn-lg rounded-pill col-md-2 col-4" type="submit" formaction="Asiatique.php">suivant</button>
        </form>
    </div>


    <?php require_once('../PHP/footer.php') ?>



    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../JAVASCRIPT/categplats.JS"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>