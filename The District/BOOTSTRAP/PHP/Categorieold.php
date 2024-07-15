<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CATEGORIE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=" ../CSS/plats.css">
</head>

<body>
    <?php require_once('../PHP/header.php') ?>
    <!--<img class="imagedefond img-fluid" src="../IMG/bg2.jpeg" height="10px" width="100%" position="relative:">-->
    <!-- <video id="video" class="mx-auto" src="../IMG/video.mp4" style="width: 100%; height: 35vh;" playsinline autoplay
            loop muted></video>
         -->
    <!--                      DEBUT CAROUSSEL CATEGORIES                     -->
    <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h1>CATEGORIE</h1>
                <div class="card-group">
                    <!--            ****************** 1ER CAROUSEL AVEC 4 IMAGES  *************************    -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 text-white cards"> <!--here after added cards the transition or zomming applied in css-->
                        <a href="../PHP/Asiatique.php">
                            <img class=" mx-auto d-block" src="../IMG/img-catogory/asian-food-cat.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">ASIATIQUE</h2>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 text-white cards">
                        <a href="../PHP/Burger.php">
                            <img class=" mx-auto d-block" src="../IMG/img-catogory/burger-cat.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">BURGERS</h2>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 text-white cards">
                        <a href="../PHP/Pasta.php">
                            <img class=" mx-auto d-block" src="../IMG/img-catogory/pasta-cat.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">PASTA</h2>
                        </div>
                    </div>
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 text-white cards"> <!--text-white-->
                        <a href="../PHP/Pizza.php">
                            <img class=" mx-auto d-block" src="../IMG/img-catogory/pizza-cat.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">PIZZA</h2>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                </div>
            </div>
            <div class="carousel-item">
                <!--            ****************** 2EME CAROUSEL AVEC 4 IMAGES  *************************    -->
                <h1>CATEGORIE</h1>
                <div class="card-group">
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 text-white cards">
                        <a href="../PHP/Salade.php">
                            <img class=" mx-auto d-block" src="../IMG/img-catogory/salade-cat.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">SALADE</h2>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 text-white cards"> <!--bg-dark color-->
                        <a href="../PHP/Sandwich.php">
                            <img class="mx-auto d-block" src="../IMG/img-catogory/sandwich-cat .jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">SANDWICH</h2>
                        </div>
                    </div>
                    <div class="img-fluid col-sm-3 p-3 text-white cards">
                        <a href="../PHP/Veggie.php">
                            <img class="mx-auto d-block" src="../IMG/img-catogory/veggie-cat.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">VEGGIE</h2>
                            <!--here we need to connect every category with every plats-->
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 text-white cards">
                        <a href="../PHP/Wrap.php">
                            <img class=" mx-auto d-block" src="../IMG/img-catogory/wrap-cat.jpg" class="card-img-top" alt="..."> <!--rounded-circle-->
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">WRAP</h2> <!-- 4 -->
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                </div>
            </div>
        </div>

        <!-- < <div class="container mt-3 mb-3">
               <div class="row justify-content-evenly mt-2">
            <button class=" btn btn-dark btn-lg rounded-pill col-md-2 col-4" type="button" id="precedent">precedent</button>
            <button class=" btn btn-dark btn-lg rounded-pill col-md-2 col-4" type="button" id="suivant"> suivant</button>
          </div>
    </div>-->
        <!-- ICI Mes boutons de carousel -->

        <div class="container-fluid mt-2 mb-2">
            <div class="col">
                <div class="col d-flex justify-content-evenly">
                    <button class="carousel-control-prev bg-primary d-none" id="carouselcatprec" type="button" data-bs-target="#carouselExample" d data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="btn btn-dark btn-lg rounded-pill col-md-1 " onclick="precedent()" type="button" id="pre">Précédent</button>
                    <button class="carousel-control-next d-none" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                    <button class="btn btn-dark btn-lg rounded-pill col-md-1" onclick="suivant()" type="button" id="nex">Suivant</button>
                </div>
            </div>
        </div>
        <?php require_once('../PHP/footer.php') ?>












        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="../JAVASCRIPT/categplats.JS"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>