<?php
require_once 'fonctions.php'; // Include your functions file

// Fetch all artists from the "artist" table

$artists = getArtists();

?>
<?php
 require_once('header.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un vinyle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="sty.css">
</head>
<body>
    <h1>Ajouter un vinyle</h1>
    <div class="container mt-5">
   

     <form class="row g-2" method="post" action="add_script.php" enctype="multipart/form-data">
    <div class="col-md-12">

        <label for="title">Titre:</label>
        <input type="text" id="title" name="title" placeholder="Enter title"  required><br><br>
    </div>
        <label for="artist">Artiste:</label>
        <select id="artist" name="artist" required>
   
        
        <?php
        $stmt= $conn->prepare('SELECT * FROM artist');
        $stmt->execute();
        ?>
            <?php foreach ($artists as $artist):?>
                <option value="<?php echo $artist['artist_id']; ?>"><?php echo $artist['artist_name']; ?></option>
            <?php endforeach; ?>
        </select><br><br>
      
        <label for="year">Année:</label>
        <input type="number" id="year"  name="year" placeholder="Enter year" required> <br><br>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" placeholder="Enter genre(Rock, Pop, Prog..." required><br><br>
      
        <label for="label">Label:</label>
        <input type="text" id="label" name="label" placeholder="Enter label (EMI, Warner,PolyGram,Univers sale..." required><br><br>
     
        <label for="price">Prix:</label>
        <input type="number" id="price" name="price" required><br><br>
       
        <label for="picture">Picture:</label>
        <input type="file" id="picture" name="picture"> <br> <br>
        
         <!--pour le bootstrap button-->
         <div class="d-flex justify-content-between">
       <button type="submit" class="btn btn-primary float-start col-2 btn-sm ">Ajouter</button> 
       
         <button type="submit" class="btn btn-primary float-end col-2  btn-sm "> <onclick="location.href='index.php'" >Retour</button>
        </div>
    </form> 
            
    <!-- <a href="index.php">Retour</a> -->
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>