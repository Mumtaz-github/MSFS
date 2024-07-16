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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href=" ../CSS/district.css">
</head>
<body>

<div class="container py-5">
  <h1 class="text-center mb-4">Catégories populaires</h1>

  <div class="row row-cols-1 row-cols-md-3 g-4">
  <?php 
    foreach ($categories as $category): ?>
      <div class="col">
        <div class="card h-100">
          <a href="categorie.php?id=<?php echo $category['id']; ?>">
            <img src="img/<?php echo $category['image']; ?>" class="card-img-top" alt="<?php echo $category['libelle']; ?>">
          </a>
          <div class="card-body">
            <h5 class="card-title"><?php echo $category['libelle']; ?></h5>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <h1 class="text-center mt-5 mb-4"> Plus vendus plats</h1>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($bestSellingDishes as $dish): ?>
      <div class="col">
        <div class="card h-80">
          <a href="#">
            <img src="img/<?php echo $dish['image']; ?>" class="card-img-top" alt="<?php echo $dish['libelle']; ?>">
          </a>
          <div class="card-body">
            <h5 class="card-title"><?php echo $dish['libelle']; ?></h5>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include 'footer.php'?>