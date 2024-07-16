<!DOCTYPE PHP>
<PHP lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOUS LES PLATS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=" ../CSS/plats.css">
  </head>

  <body>
    <?php require_once('../PHP/header.php') ?>
   
    <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <h1> tous les plats</h1>
        <div class="card-group">
        <div class="img-fluid col-sm-3 p-0 text-white text-center">
        <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../PHP/imgplat/pizza-bianca.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Pizza Bianca</h4>
                <a href="../PHP/Commande.php" id="vegg02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
        <div class="img-fluid col-sm-3 p-0 text-white text-center">
              <img class=" mx-auto d-block" src="../PHP/imgplat/buffalo-chicken.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Buffalo Chicken Wrap</h4>
                <a href="../PHP/Commande.php" id="pizz02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
         <div class="card-group">
            <div class="img-fluid col-sm-3 p-0 text-white text-center">
              <img class=" mx-auto d-block" src="../PHP/imgplat/cesar_salad.jpg class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SALADE CESAR </h4>
                <a href="../PHP/Commande.php" id="sala01" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            </div>
            </div>
            <div class="carousel-item">
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../PHP/imgplat/lasagnes_viande.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Lasagnes</h4>
                <a href="../PHP/Commande.php" id="vegg02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../PHP/imgplat/pizza-margherita.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Pizza margherita</h4>
                <a href="../PHP/Commande.php" id="vegg02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../PHP/imgplat/cheesburger.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Cheeseburger</h4>
                <a href="../PHP/Commande.php" id="vegg02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            
      <div class="container-fluid mt-4 mb-4">
        <div class="col">
          <div class="col d-flex justify-content-evenly">

            <button class="carousel-control-prev bg-primary d-none" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="btn btn-dark btn-lg rounded-pill col-md-1 " onclick="precedent()" type="button" id="tous">Précédent</button>

            <button class="carousel-control-next d-none" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
            <button class="btn btn-dark btn-lg rounded-pill col-md-1  float-right" onclick="suivant()" type="button" id="tou">Suivant</button>
          </div>
        </div>
      </div>
      <!-- ****************************socail media icons***************************-->
      <?php require_once('../PHP/footer.php') ?>









      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="../JAVASCRIPT/categplats.JS"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  </body>

</PHP>