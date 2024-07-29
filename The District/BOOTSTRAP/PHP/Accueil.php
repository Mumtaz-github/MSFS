<?php $showVideo = true; ?>
<?php
require_once('header.php');
require_once('database.php');
require_once('DAO.php');

$dao = new DAO($conn);

$categories = $dao->getPopularCategories();
$bestSellingDishes = $dao->getBestSellingDishes();

?>

<body id="parallax">
  <div class="container py-0">
    <h1 class="text-center mb-4">CATÉGORIES POPULAIRES</h1> <!--parite 6 plats-->
    <div class="row row-cols-1 row-cols-md-3 g-5">
      <?php foreach ($categories as $category) : ?>
        <div class="col">
          <a href="plats.php?category_id=<?= $category['id']; ?>">
            <div class="card">
              <img src="img/<?= $category['image']; ?>" class="card-img-top" alt="<?= $category['libelle']; ?>">
              <div class="card-img-overlay text-center">
                <h5 class="card-title" style="position: absolute; bottom: 0; left: 0; width: 100%;"><?= $category['libelle']; ?></h5>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <h1 class="text-center mt-5 mb-4">PLUS VENDUS PLATS</h1> <!--partie 3 plats-->
    <div class="row row-cols-1 row-cols-md-3 g-5">
      <?php foreach ($bestSellingDishes as $dish) : ?>
        <div class="col">
          <a href="plats.php">
            <div class="card plats-card-no-zoom">
              <img src="img/<?= $dish['image']; ?>" class="dis-img-top" alt="<?= $dish['libelle']; ?>">
              <div class="card-img-overlay text-center">
                <h5 class="card-title" style="position: absolute; bottom: 0; left: 0; width: 100%;"><?= $dish['libelle']; ?></h5>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Add a search form -->
  <form action="plats.php" method="get" class="ongletrecherche">
    <input type="search" name="q" placeholder="Rechercher...">
    <button type="submit">Rechercher</button>
  </form>

  <!--Add a container for search results -->
  <section id="search-results-container">
    <h2 class="text-center mb-4"></h2>
    <div id="search-results">
    </div>
  </section>

  <?php require_once('../PHP/footer.php') ?>

  <!-- <script src="../JAVASCRIPT/searchbar.js"></script> -->



  <!-- 
 <div class="container mt-3">
  <form action="" method="GET" class="form-inline justify-content-center">
    <input type="text" name="search" class="form-control mr-sm-2" 
    placeholder="Rechercher..." value="< ?php echo htmlspecialchars($searchTerm, ENT_QUOTES, 'UTF-8');?>">
      <button type="submit" class="btn btn-primary">Rechercher</button>
  </form>
</div> 
   -->