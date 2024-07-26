<?php $showVideo = true;?>
<?php
require_once('header.php');
//require_once('database.php');
require_once('DAO.php');

$dao = new DAO($conn);

if (isset($_GET['q'])) {
    $searchQuery = $_GET['q'];
    $dishes = $dao->searchDishes($searchQuery);
} elseif (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $dishes = $dao->getDishesByCategory($category_id);
    echo 'on est là';
} elseif (isset($category_id)) { 
    $dishes = $dao->getDishesByCategory($category_id);
} else {
    $dishes = $dao->getAllDishes(); //to get 6 dishes getSixDishes
}
?>
<!-- // require_once('header.php');
// //require_once('database.php');
// require_once('DAO.php');

// this functions for to display clickable accueil and categorie pages images, 
//also display plats.php 6 plats 
// $dao = new DAO($conn);

// if (isset($_GET['category_id'])) {
//   $category_id = $_GET['category_id'];

  // Get dishes for the selected category/
  // Get category ID from URL parameter
  // $dishes = $dao->getDishesByCategory($category_id);
//   echo 'on est là';
// } elseif (isset($category_id)) { // added parentheses and isset check
//   $dishes = $dao->getDishesByCategory($category_id);
  // Get 6 dishes from database district
//   $dishes = $dao->getAllDishes();
// } else {
  // Get 6 or all dishes from database district
  // $dishes = $dao->getAllDishes(); //to get 6 dishes getSixDishes
// }
// ? > -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PLATS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/plats.css">
</head>

<body>
  <div class="container py-0">
  <h1 class="text-center mb-4">TOUTES LES PLATS</h1>
    <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel">
      <div class="carousel-inner mb-5 mt-5">  <!--mb mean margin bottom and mt mean margin top-->
        <?php
        $numSlides = ceil(count($dishes) / 2);
        for ($i = 0; $i < $numSlides; $i++) :
        ?>
          <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
            <div class="row row-cols-1 row-cols-md-2 g-5"> 
              <?php foreach (array_slice($dishes, $i * 2, 2) as $dish) : ?>
                <div class="col">
                  <div class="card flex-row plats-card-no-zoom" style="height: 300px;"> <!--plats-card-no-zoom added for css to out from card zooming of this page-->
                    <a href="plats.php?id=<?= $dish['id']; ?>">
                      <img src="img/<?= $dish['image']; ?>" class="dish-img-top" id="imgplat" alt="<?= $dish['libelle']; ?>">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title"><?= $dish['libelle']; ?></h5>
                      <p class="card-text"><?= $dish['description']; ?></p>
                      <p class="card-text">Prix: <?= $dish['prix']; ?> €</p>
                      <a href="../PHP/Commande.php?id=<?= $dish['id']; ?>" class="btn btn-dark btn-lg rounded-pill command-button-custom" id="pla">Commander</a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <!-- Carousel controls -->
      <div class="container-fluid mt-2 mb-2">
        <div class="col">
          <div class="col d-flex justify-content-evenly">
            <button class="carousel-control-prev bg-primary d-none" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="btn btn-dark btn-lg rounded-pill col-md-1" onclick="precedent()" type="button" id="pre">Précédent</button>
            <button class="carousel-control-next d-none" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
            <button class="btn btn-dark btn-lg rounded-pill col-md-1" onclick="suivant()" type="button" id="nex">Suivant</button>
          </div>
        </div>
      </div>
    </div>
    </div>

  <!-- ****************************socail media icons***************************-->
  <?php require_once('../PHP/footer.php') ?>
  <input id="search-input" type="text" />
  <!-- <script src="../JAVASCRIPT/categplats.JS"></script> -->
  <script src="../JAVASCRIPT/searchbar.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1