<!-- < ?php
require_once('header.php');
require_once('database.php');
require_once('DAO.php');

$dao = new DAO($conn);

// Get 6 dishes from database district
$dishes = $dao->getSixDishes();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOUS LES PLATS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/plats.css">
</head>

<body>
  <div class="container py-2">
    <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel">
      <div class="carousel-inner">
        < ?php
        $numSlides = ceil(count($dishes) / 3);
        for ($i = 0; $i < $numSlides; $i++) :
        ?>
          <div class="carousel-item < ?= $i === 0 ? 'active' : '' ?>">
            <div class="row row-cols-1 row-cols-md-3 g-2">
              < ?php foreach (array_slice($dishes, $i * 3, 3) as $dish) : ?>
                <div class="col">
                  <div class="card h-100">
                    <a href="commande.php?id=< ?= $dish['id']; ?>">
                      <img src="imgplat/< ?= $dish['image']; ?>" class="card-img-top" alt="< ?= $dish['libelle']; ?>">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title">< ?= $dish['libelle']; ?></h5>
                    </div>
                  </div>
                </div>
              < ?php endforeach; ?>
            </div>
          </div>
        < ?php endfor; ?>
      </div>
      <!-- Carousel controls -->
      <!-- <button class="carousel-control-prev bg-primary d-none" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="btn btn-dark btn-lg rounded-pill col-md-1 " onclick="precedent()" type="button" id="tous">Précédent</button>

      <button class="carousel-control-next d-none" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
      <button class="btn btn-dark btn-lg rounded-pill col-md-1  float-right" onclick="suivant()" type="button" id="tou">Suivant</button>
    </div>
  </div> -->

    <!-- ****************************socail media icons***************************-->
    <!-- < ?php require_once('../PHP/footer.php') ?>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../JAVASCRIPT/categplats.JS"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body> -->

<!-- </html> --> -->

<?php
require_once('header.php');
require_once('database.php');
require_once('DAO.php');

$dao = new DAO($conn);

// Get 6 dishes from database district
$dishes = $dao->getSixDishes();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOUS LES PLATS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/plats.css">
</head>

<body>
  <div class="container py-2">
    <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        $numSlides = ceil(count($dishes) / 3);
        for ($i = 0; $i < $numSlides; $i++) :
       ?>
          <div class="carousel-item <?= $i === 0? 'active' : ''?>">
            <div class="row row-cols-1 row-cols-md-3 g-2">
              <?php foreach (array_slice($dishes, $i * 3, 3) as $dish) :?>
                <div class="col">
                  <div class="card h-100">
                    <a href="commande.php?id=<?= $dish['id'];?>">
                      <img src="imgplat/<?= $dish['image'];?>" class="card-img-top" alt="<?= $dish['libelle'];?>">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title"><?= $dish['libelle'];?></h5>
                      <p class="card-text"><?= $dish['description'];?></p>
                      <p class="card-text">Prix: <?= $dish['prix'];?> €</p>
                      <a href="commande.php?id=<?= $dish['id'];?>" class="btn btn-dark rounded-pill">Commander</a>
                    </div>
                  </div>
                </div>
              <?php endforeach;?>
            </div>
          </div>
        <?php endfor;?>
      </div>
      <!-- Carousel controls -->
      <button class="carousel-control-prev bg-primary d-none" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="btn btn-dark btn-lg rounded-pill col-md-1 " onclick="precedent()" type="button" id="tous">Précédent</button>

      <button class="carousel-control-next d-none" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
      <button class="btn btn-dark btn-lg rounded-pill col-md-1  float-right" onclick="suivant()" type="button" id="tou">Suivant</button>
    </div>
  </div>

    <!-- ****************************socail media icons***************************-->
    <?php require_once('../PHP/footer.php')?>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../JAVASCRIPT/categplats.JS"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>