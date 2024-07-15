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
    <!-- <img class="imagedefond img-fluid" src="../IMG/bg2.jpeg" height="10px" width="100%" position="relative:"> -->
    <!-- <video id="video" class="mx-auto" src="../IMG/video.mp4" style="width: 100%; height: 35vh;" playsinline autoplay
            loop muted></video>-->
    <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h1> ASIATIQUE</h1>
          <div class="card-group">

            <!--*******************1em partie plats Asiatique***************************-->
            <div class="img-fluid col-sm-3 p-0 text-white text-center"> <!--bg-dark   -->

              <img class=" mx-auto d-block" src="../platscategorieimag/img-asiantique/Kabuli-Pulao-fotor.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title;">KABULI PULAO</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="asia01" class="btn rounded-pill btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-asiantique/Daal-ka-paratharr-fotor.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">DAAL PARATHA</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="asia02" class="btn rounded-pill btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-asiantique/riz-frit-bangkok.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">RIZ FRIT BANGKOK</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="asia03" class="btn rounded-pill btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white  text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-asiantique/soupe-a-brook.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SOUPE BROOK</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="asia04" class="btn rounded-pill btn-dark">COMMANDER</a>
              </div>
            </div>
          </div>
        </div>
        <!--*********************************2em partie plats burger******************************-->
        <div class="carousel-item">
          <h1> BURGER</h1>
          <div class="card-group">
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-burger/MOS-rice-burger.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">MOS RICE BURGER</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="burg01" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-burger/Salmon-burger.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SALMON BURGER</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="burg02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-burger/Tomboy-chili-cheeseburger.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">CHILI CHEESEBURGER</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="burg03" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-burger/WHOPPER-Cheese-Burger.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">CHEESE BURGER</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="burg04" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
          </div>
        </div>
        <!--*******************************************3em partie plats  Pasta***************************************-->
        <div class="carousel-item">
          <h1> PASTA</h1>
          <div class="card-group">
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-pasta/bavette-pasta.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">BAVETTE PASTA</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="past01" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-pasta/Cappellacci-Pasta.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">PASTA FAGIOLI</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="past02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-pasta/Pasta-fagioli.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">PASTA CAPPELLACCI</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="past03" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-pasta/Pasta-salad-closeup.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">PASTA SALAD CLOSEUP</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="past04" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
          </div>
        </div>
        <!--*************************************************4em partie plats  Pizza*****************************************-->
        <div class="carousel-item">
          <h1>PIZZA</h1>
          <div class="card-group">
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-pizza/pizaa-bresilienne.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">PIZZA BRESILIENNE</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="pizz01" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0 text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-pizza/Pizza-margherita.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">PIZZA MARGHERITA</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="pizz02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-pizza/pizza-sicilienne.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">PIZZA SICILIENNE</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="pizz03" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0 text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-pizza/Pizza-pesto-poulet.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">PIZZA PESTO POULET</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="pizz04" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
          </div>
        </div>
        <!--******************************************5em partie plats  salad****************************************-->
        <div class="carousel-item">
          <h1> SALADE</h1>
          <div class="card-group">
            <div class="img-fluid col-sm-3 p-0 text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-salade/salade-césar-maison.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SALADE CESAR MAISON</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="sala01" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-salade/salade-fattouche-socca-sauce.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SALADE FATTOUCHE SOCCA SAUCE</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="sala02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-salade/salade-féves-saumon-crevettes.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SALADE FEVES SAUMON CREVETTES</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="sala03" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-salade/salade-poulet.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SALADE POULTE</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="sala04" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
          </div>
        </div>
        <!--********************************************6em partie plats  sandwich**********************************************-->
        <div class="carousel-item">
          <h1>SANDWICH</h1>
          <div class="card-group">
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-sandwish/sandwich-fondant-au-thon.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SANDWICH FONDANT THON</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="sand01" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-sandwish/sandwich-pancetta.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SANDWICH PANCETTA</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="sand02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0 text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-sandwish/sandwich-avocat-poulet.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SANDWICH AVOCAT POULET</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="sand03" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-sandwish/sandwich-aux-oeufs.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SANDWICH OEUFS</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="sand04" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
          </div>
        </div>
        <!--****************************************7em partie plats  Veggie*****************************************-->
        <div class="carousel-item">
          <h1>VEGGIE</h1>
          <div class="card-group">
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-veggie/taboule-choufleur.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">TABOULE CHOUFLEUR</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="vegg01" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-veggie/lasagnes-aux-legumes-et-feta-fac.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">LASAGNES LEGUMES FETA FAC</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="vegg02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-veggie/riz-cantonais-vegetarien.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">RIZ CANTONAIS VEGETARIEN</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="vegg03" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-veggie/saucisse-vegetarienne.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">SAUCISSE VEGETARRIEN</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="vegg04" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
          </div>
        </div>
        <!--**********************************8em partie plats  wrap***************************************-->
        <div class="carousel-item">
          <h1>WRAP</h1>
          <div class="card-group">
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-wrap/wrap-crudivore.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">WRAP CRUDIVORE</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="wrap01" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center ">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-wrap/wrap-epinards.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">WRAP EPINARDS</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="wrap02" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center"> <!--here i have relead another wrap photo-->
              <img class=" mx-auto d-block" src="../platscategorieimag/img-wrap/wr-express-facon-croque.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">WRAP EXPRESS FACON CROQUE</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="wrap03" class="btn btn-dark">COMMANDER</a>
              </div>
            </div>
            <div class="img-fluid col-sm-3 p-0  text-white text-center">
              <img class=" mx-auto d-block" src="../platscategorieimag/img-wrap/wraps-poulet-avocat.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">WRAP POULET AVOCAT</h4>
                <p class="card-text"> ce plat est composé de...</p>
                <a href="../PHP/Commande.php" id="wrap04" class="btn btn-dark ">COMMANDER</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ****************buttons *************-->
      <!-- <div class="container mt-3 mb-3">
        <div class="row justify-content-evenly mt-2">
            <button class=" btn btn-dark btn-lg rounded-pill col-md-2 col-4" type="button" id="precedent">precedent</button>
            <button class=" btn btn-dark btn-lg rounded-pill col-md-2 col-4" type="button" id="suivant">
                suivant</button>
        </div>
    </div> -->
      <!--**********************************Carousel button********************** -->

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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  </body>

</PHP>