
<?php
// Configuration
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "district";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Create a new PDO connection
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Set error mode to exceptions
} catch (PDOException $e) {
    die("Connection failed: ". $e->getMessage());
     // Catch any connection errors and display error message
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Check if form is submitted
    $entity = $_POST['entity'];
       // Get selected entity from form

    // Query based on selected entity
    if ($entity === 'plats') {
        $query = "SELECT plat.libelle, plat.prix, categorie.libelle as nom_categorie FROM plat JOIN categorie ON plat.id_categorie = categorie.id";
        // Query for plats


} elseif ($entity === 'commandes') { //here added clumns nom,date,telephone, email and adresse client from district database table commande
        $query = "SELECT  nom_client, date_commande, telephone_client, email_client, adresse_client  FROM commande";
        // Query for commandes

    } elseif ($entity === 'categories') {
        $query = "SELECT *, active FROM categorie"; //here we added column active from database district table categorie
        // Query for categories
    }

    // Prepare and execute query
    $stmt = $conn->prepare($query);
       // Prepare the query
    $stmt->execute();

    // Fetch results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display results
    foreach ($results as $row) {
         //Loop through each result
        if ($entity === 'plats') {
            echo "<div class='card mb-3'>
                <div class='card-body'>
                    <h5 class='card-title'>". htmlspecialchars($row['libelle']). "</h5>
                    <p class='card-text'>Category: ". htmlspecialchars($row['nom_categorie']). "</p>
                    <p class='card-text'>Price: ". htmlspecialchars($row['prix']). " €</p>
                </div>
            </div>";
             // Display plats results

        } elseif ($entity === 'commandes') {
            echo "<div class='card mb-3'>
                <div class='card-body'>
                    <h5 class='card-title'>". htmlspecialchars($row['nom_client']). "</h5>
                    <p class='card-text'>Date Commande: ". htmlspecialchars($row['date_commande']). "</p>
                    <p class='card-text'>Telephone Client: ". htmlspecialchars($row['telephone_client']). "</p>
                    <p class='card-text'>Email Client: ". htmlspecialchars($row['email_client']). "</p>
                    <p class='card-text'>Adresse Client: ". htmlspecialchars($row['adresse_client']). "</p>
                </div>
            </div>";
              // Display commandes results
       } elseif ($entity === 'categories') {
           echo "<div class='card mb-3'>
                <div class='card-body'>
                    <h5 class='card-title'>". htmlspecialchars($row['libelle']). "</h5>
                     <p class='card-text'>Active: ". htmlspecialchars($row['active']). "</p>
                     
                </div>
            </div>";
            // Display categories results
        }
    }
}

// Close connection
$conn = null;
// Close the PDO connection
?>



<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>District Database</title>
    <style>
         body {
            background-color: #1a1a1a; 
            color: #eaeaea;
           font-family: 'Arial', sans-serif;
            }

           .container {
            background: #2b2b2b;
            padding: 30px;
            /* espacement interne pour éviter que le contenu touche les bords */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            /* ombre portée pour un effet de profondeur */
        }
        .form-control{
            background-color: darkgray;
        }
        

        .card {
            background-color: #000; /*#333*/ 
            border: none;
            color: #eaeaea;
        }
        .card-title {
            font-size: 1.6rem;
        }
      
</style>
</head>
<body>
    <div class="container mt-6" style="margin-top: 50px;">
        <h1 class="mb-4">District Database</h1>
        <form method="post">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <select name="entity" class="form-control">
                        <option value="plats">Plats</option>
                        <option value="commandes">Commandes</option>
                        <option value="categories">Categories</option>
                    </select> <br>
                    <button class="btn btn-secondary">Display</button>
                </div>
            </div>
        </form>
        <div id="results" class="mt-4">
            <!-- Results will be displayed here -->
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>