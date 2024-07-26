<?php

// searchbar.php
require_once('database.php');
require_once('DAO.php');

// Get the search query from the URL parameter
$search_query = $_GET['q'];

// Query the database to retrieve the search results
$search_queries = array("Pizza", "Burger", "Buffalo Chicken Wrap", "Spaghetti aux légumes", "Salade César", "Courgettes farcies au quinoa", 
"Tagliatelles au saumon");

$query = "SELECT *, 
             (LOWER(libelle) REGEXP LOWER('[[:<:]]".$search_query."[[:>:]]') OR LOWER(description) REGEXP LOWER('[[:<:]]".$search_query."[[:>:]]')) AS match_found,
             (CASE 
                WHEN LOWER(libelle) REGEXP LOWER('[[:<:]]".$search_query."[[:>:]]') THEN 2 
                WHEN LOWER(description) REGEXP LOWER('[[:<:]]".$search_query."[[:>:]]') THEN 1 
                ELSE 0 
             END) AS relevance 
          FROM plat 
          WHERE LOWER(libelle) REGEXP LOWER('[[:<:]]".$search_query."[[:>:]]') OR LOWER(description) REGEXP LOWER('[[:<:]]".$search_query."[[:>:]]')
          ORDER BY relevance DESC";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();

// Check if there are any results
if (count($result) > 0) {
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Résultats de recherche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/plats.css">
    <style>
      .pizza-card {
        width: 550px;
        margin: 20px;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #ff8c00;
        font-size: larger;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .pizza-card img {
        width: 100%;
        height: 270px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
      }
      .search-results {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      h1{
        text-align: center;
        font-size: 40px;
      }
    </style>
  </head>
  <body style="background-color: green;">
    <h1>Résultats de recherche pour "<?php echo $search_query;?>"</h1>
    <div class="search-results">
      <?php
      foreach ($result as $row) {
        ?>
        <div class="pizza-card">
          <img src="<?php echo 'img/' . $row['image'];?>" alt="<?php echo $row['libelle'];?>">
          <h2><?php echo $row['libelle'];?></h2>
          <p><?php echo $row['description'];?></p>
          <p>Prix: <?php echo $row['prix'];?> €</p>
          <button id="research" class="commande-btn btn-dark btn-lg rounded-pill command-button-custom-<?php echo $row['id'];?>" onclick="window.location.href='../PHP/Commande.php?id=<?php echo $row['id'];?>'">Commander</button>
  </div>
        <?php
      }
      ?>
    </div>
  </body>
  </html>
  <?php
} else {
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Aucun résultat trouvé</title>
  </head>
  <body>
    <h1>Aucun résultat trouvé pour "<?php echo $search_query;?>"</h1>
    <p>Désolé, nous n'avons trouvé aucun résultat correspondant à votre recherche.</p>
  </body>
  </html>
  <?php
}

// Close the database connection (not needed with PDO)
$conn = null; // instead, set the connection to null to release resources
?>