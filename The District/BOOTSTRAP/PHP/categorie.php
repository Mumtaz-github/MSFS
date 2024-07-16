<?php
require_once('header.php');
require_once('database.php');
require_once('DAO.php');

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
                    <a href="categorie.php?id=<?= $category['id']; ?>">
                      <img src="img/<?= $category['image']; ?>" class="card-img-top" alt="<?= $category['libelle']; ?>">
                      <div class="card-img-overlay text-center">
                    </a>
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



      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="../JAVASCRIPT/categplats.JS"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


      <!-- Remove the custom JavaScript code, as it's not needed -->
      <!-- <script>
        function precedent() {
            $('#carouselExample').carousel('prev');
        }

        function suivant() {
            $('#carouselExample').carousel('next');
        }
    </script> -->

      <?php require_once('../PHP/footer.php') ?>
</body>

</html>