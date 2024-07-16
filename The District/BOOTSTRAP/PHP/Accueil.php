<?php require_once('header.php');
require_once('database.php');
require_once('DAO.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
<!-- <link rel="stylesheet" href=" ../CSS/plats.css"> -->
</head>


<body>
  <div class="container py-5">
    <h1 class="text-center mb-4">Catégories populaires</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach ($categories as $category) : ?>
        <div class="col">
          <div class="card h-100">
            <a href="categorie.php?id=<?= $category['id']; ?>">
              <img src="img/<?= $category['image']; ?>" class="card-img-top" alt="<?= $category['libelle']; ?>">
              <div class="card-img-overlay text-center">
                <h5 class="card-title"><?= $category['libelle']; ?></h5>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  
    <!-- < ?php foreach ($categories as $category) : ?>
      
  <div class="col">
    <div class="card h-100">
      <a href="categorie.php?id=< ?php echo $category['id']; ?>">
        <img src="img/< ?php echo $category['image']; ?>" class="card-img-top" alt="< ?php echo $category['libelle']; ?>">
      </a>
    </div>
    <h5 class="card-category">< ?php echo $category['libelle']; ?></h5>
  </div> -->
  <h1 class="text-center mt-5 mb-4">Plus vendus plats</h1>
    <div class="row row-cols-1 row-cols-md-3 g-8">
      <?php foreach ($bestSellingDishes as $dish) : ?>
        <div class="col">
          <div class="card h-80">
            <a href="#">
              <img src="img/<?= $dish['image']; ?>" class="card-img-top" alt="<?= $dish['libelle']; ?>">
              <div class="card-img-overlay text-center">
                <h5 class="card-title"><?= $dish['libelle']; ?></h5>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php require_once('../PHP/footer.php') ?>
</body>
</html>
        <!-- <div class="col">
          <div class="card h-80">
            <a href="#">
              <img src="img/< ?php echo $dish['image']; ?>" class="card-img-top" alt="< ?php echo $dish['libelle']; ?>">
            </a>
            <div class="card-body">
              <h5 class="card-title">< ?php echo $dish['libelle']; ?></h5>
            </div>
          </div>
        </div> -->
      


