<!-- 


      
<!-- < ?php
require_once('header.php');
require_once('database.php');
require_once('DAO.php');

$dao = new DAO($conn);

$categories = $dao->getPopularCategories();
$bestSellingDishes = $dao->getBestSellingDishes();
?> -->

 <!-- <!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
 


  <link rel="stylesheet" href=" ../CSS/plats.css"> 
</head>

<body>
  <div class="container py-5">
    <h1 class="text-center mb-4">Catégories populaires</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      < ?php foreach ($categories as $category) : ?>
        <div class="col">
          <div class="card h-100">
            <a href="plats.php?category_id=< ?= $category['id']; ?>">
              <img src="img/< ?= $category['image']; ?>" class="card-img-top" alt="< ?= $category['libelle']; ?>">
              <div class="card-img-overlay text-center">
                <h5 class="card-title">< ?= $category['libelle']; ?></h5>
              </div>
            </a>
          </div>
        </div>
      < ?php endforeach; ?>
    </div> 

     <h1 class="text-center mt-5 mb-4">Plus vendus plats</h1>
    <div class="row row-cols-1 row-cols-md-3 g-8">
      < ?php foreach ($bestSellingDishes as $dish) : ?>
        <div class="col">
          <div class="card h-80">
            <a href="plats.php">
              <img src="img/< ?= $dish['image']; ?>" class="card-img-top" alt="< ?= $dish['libelle']; ?>">
              <div class="card-img-overlay text-center">
                <h5 class="card-title">< ?= $dish['libelle']; ?></h5>
              </div>
            </a>
          </div>
        </div>
      < ?php endforeach; ?>
    </div>
  </div>
  < ?php require_once('../PHP/footer.php') ?>
</body>
</html>  --> -->
<?php
require_once('header.php');
require_once('database.php');
require_once('DAO.php');

$dao = new DAO($conn);

$categories = $dao->getPopularCategories();
$bestSellingDishes = $dao->getBestSellingDishes();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>

  <link rel="stylesheet" href="../CSS/plats.css">
</head>

<body>
  <div class="container py-5">
    <h1 class="text-center mb-4">Catégories populaires</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach ($categories as $category) : ?>
        <div class="col">
          <div class="card h-100">
            <a href="plats.php?category_id=<?= $category['id']; ?>">
              <img src="img/<?= $category['image']; ?>" class="card-img-top" alt="<?= $category['libelle']; ?>">
              <div class="card-img-overlay text-center">
                <h5 class="card-title"><?= $category['libelle']; ?></h5>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <h1 class="text-center mt-5 mb-4">Plus vendus plats</h1>
    <div class="row row-cols-1 row-cols-md-3 g-8">
      <?php foreach ($bestSellingDishes as $dish) : ?>
        <div class="col">
          <div class="card h-80">
            <a href="plats.php">
              <img src="img/<?= $dish['image']; ?>" class="card-img-top" alt="<?= $dish['libelle']; ?>">
              <div class="card-img-overlay text-center">
                <h5 class="card-title"><?= $dish['libelle']; ?></h5>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

   <!-- Add a search form -->
   <form action="searchbar.php" method="get">
      <input type="search" name="query" placeholder="Rechercher...">
      <button type="submit">Rechercher</button>
    </form>

    <!-- Add a container for search results -->
    <section id="search-results-container">
      <h2 class="text-center mb-4">Résultats de recherche</h2>
      <div id="search-results">
        <!-- The search results will be displayed here -->
      </div>
    </section>

    <?php require_once('../PHP/footer.php')?>
  </body>
</html>

    <?php require_once('../PHP/footer.php') ?>
    <script src="../JAVASCRIPT/searchbar.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>