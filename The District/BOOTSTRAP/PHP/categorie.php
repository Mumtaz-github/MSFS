<?php
require_once('header.php');
require_once('database.php');
require_once('DAO.php');


$categories = $dao->getPopularCategories();
$bestSellingDishes = $dao->getBestSellingDishes();

// Récupérer les catégories depuis la base de données
$categories = $dao->getCategories();

// Calculate the number of items per slide
$itemsPerSlide = 3;

// Calculate the number of slides
$numSlides = ceil(count($categories) / $itemsPerSlide);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catégories</title>
  <link rel="stylesheet" href=" ../CSS/style.css">
</head>

<body>
  <div class="container py-2">
    <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php for ($i = 0; $i < $numSlides; $i++) : ?>
          <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
            <div class="row row-cols-1 row-cols-md-3 g-2">
              <?php foreach (array_slice($categories, $i * $itemsPerSlide, $itemsPerSlide) as $category) : ?>
                <div class="col">
                  <div class="card h-60">
                  <a href="plats.php?category_id=<?= $category['id'];?>" style="position: relative; z-index: 1;">
  <img src="img/<?= $category['image'];?>" class="card-img-top" alt="<?= $category['libelle'];?>">
</a>
                    <div class="card-img-overlay text-center">
                      <div class="card-body">
                        <h5 class="card-title"><?= $category['libelle']; ?></h5>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endfor; ?>
      </div>

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
      <script src="../JAVASCRIPT/searchbar.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  


      
</body>

</html>