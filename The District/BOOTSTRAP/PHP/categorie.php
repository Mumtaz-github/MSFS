<?php $showVideo = true; ?>
<?php
require_once('header.php');
require_once('database.php');
require_once('DAO.php');

$dao = new DAO($GLOBALS['conn']);


$bestSellingDishes = $dao->getBestSellingDishes(); // Retrieve the best-selling dishes
$categories = $dao->getCategories();  // Retrieve the categories from the database
$itemsPerSlide = 3;  // Calculate the number of items per slide
$numSlides = ceil(count($categories) / $itemsPerSlide); // Calculate the number of slides
?>

<body>
  <div class="container plats-container"> <!--plats-container for css zooming cards-->
    <h1 class="text-center my-3">CATÉGORIES</h1>
    <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel">
      <div class="carousel-inner carousel-no-scroll "> <!--mb mean margin bottom and mt mean margin top-->
        <?php for ($i = 0; $i < $numSlides; $i++) : ?> <!-- Loop through the number of slides-->
          <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>"> <!-- Carousel item, active class added for the first item-->

            <!-- Row container for categories, with responsive columns -->
            <div class="row row-cols-1 row-cols-md-3 gx-5"> <!--gx give space between categories in horizantally-->
              <?php foreach (array_slice($categories, $i * $itemsPerSlide, $itemsPerSlide) as $category) : ?> <!-- Loop through the categories for this slide, using array_slice to get the correct subset-->
                <div class="col-md-4 mb-3 "> <!-- Column container for each category -->
                  <div class="card">
                    <!-- Link to category page with image and overlay -->
                    <a href="plats.php?category_id=<?= $category['id']; ?>" style="position: relative; z-index: 1;"> </a><!--z-index: 1 make image clickable-->
                    <img src="img/<?= $category['image']; ?>" class="card-img-top" alt="<?= $category['libelle']; ?>"> <!-- Category image -->
                    <div class="card-img-overlay text-center"> <!-- Image overlay with category title -->
                      <div class="card-body">
                        <!-- Category title -->
                        <h5 class="card-title" style="position: absolute; bottom: 0px; left: 0; width: 100%;"><?= $category['libelle']; ?></h5>
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
          <div class="col d-flex justify-content-between"> <!--justify-content-between push the button towards x and y axis-->
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
    </div>
  </div>

  <?php require_once('../PHP/footer.php') ?>
  <script src="../JAVASCRIPT/categplats.JS"></script>
  <script src="../JAVASCRIPT/searchbar.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




</body>

</html>