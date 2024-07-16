




 <?php require_once('header.php');?>
 <?php
// Start the session , still didn't check it properly that how it works we can add session in page 
#session_start();

// Check if the user is logged in
#if (isset($_SESSION['username'])) {
    // User is logged in, display a welcome message
    #echo "Welcome, ". $_SESSION['username']. "!";
#} else {
    // User is not logged in, display a login link
    #echo "You are not logged in. <a href='login.php'>Login</a>";
#}
?>





 <!--video de page accueil-->
 <!--<div class="image-container"> 
 <div class="card no-hover" style="background-color:black;">
            <video id="video" class="col-12" src="../IMG/video.mp4" style="width: 100%; height: 35vh;"
                playsinline autoplay loop muted></video>  pour le video style="width: 100vmax; height: 35vh-->
              
           <!-- <div class="ongletrecherche"> 
                <input class="form-control me rounded-pill" type="search" placeholder="Search" aria-label="Search">
            </div>
        </div>
        </div>-->
            <!--container de page accueil de image-->
            <div class="container py-0">
                <div class="row row-cols-1 row-cols-md-3 g-0 py-0">
               <div class="col">
                   <div class="cards">
                       <a href="../PHP/Asiatique.php">
                                <img src="../IMG/img-catogory/asian-food-cat.jpg" class="card-img-top" alt="asian">
                            </a>
                            <div class="card-body ">
                            <h4 class="card-title text-center text-white">ASIATIQUE</h4>
                           <!-- </*?php if (isset($_SESSION['username'])) {?>
                        <p>Welcome, </*?php echo $_SESSION['username'];?>!</p>  //when user logged in it diplay welcom message, it display user'sname or other information
                    </*?php }?>-->
                            </div>
                            <div class="d-flex justify-content-around mb-1">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cards">
                            <a href="../PHP/Burger.php">
                                <img src="../IMG/img-catogory/burger-cat.jpg" class="card-img-top" alt="burger">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title text-center text-white">BURGER</h4> <!--text-info-->
                            </div>
                            <div class="d-flex justify-content-around mb-1">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cards">
                            <a href="../PHP/Pasta.php">
                                <img src="../IMG/img-catogory/pasta-cat.jpg" class="card-img-top" alt="pasta">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title text-center text-white">PASTA</h4>
                            </div>
                            <div class="d-flex justify-content-around mb-1">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cards">
                            <a href="../PHP/Pizza.php">
                                <img src="../IMG/img-catogory/pizza-cat.jpg" class="card-img-top" alt="pizza">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title text-center text-white">PIZZA</h4>
                            </div>
                            <div class="d-flex justify-content-around mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cards">
                            <a href="../PHP/Salade.php">
                                <img src="../IMG/img-catogory/salade-cat.jpg" class="card-img-top" alt="salade">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title text-center text-white">SALADE</h4>
                            </div>
                            <div class="d-flex justify-content-around mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cards">
                            <a href="../PHP/Veggie.php">
                                <img src="../IMG/img-catogory/veggie-cat.jpg" class="card-img-top" alt="veggie">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title text-center text-white">VEGGIE</h4>
                            </div>
                            <div class="d-flex justify-content-around mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cards">
                            <a href="../PHP/Veggie.php">
                                <img src="../IMG/img-food/spaghetti-legumes.jpg" class="card-img-top" alt="spaghetti;">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title text-center text-white">SPAGHETTI LEGUMES</h4>
                            </div>
                            <div class="d-flex justify-content-around mb-2">
                            </div>
                        </div>
                    </div>
                   <div class="col">
                        <div class="cards">
                            <a href="../PHP/Pizza.php">
                                <img src="../IMG/img-food/menu-pizza(1).jpg"  class="card-img-top" alt="cheesburger;">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title text-center text-white">MENU PIZZA</h4>
                            </div>
                            <div class="d-flex justify-content-around mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cards">
                            <a href="../PHP/Salade.php">
                                <img src="../IMG/img-food/salads.jpg" class="card-img-top" alt="lasagnes;">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title text-center text-white">SALADE</h4>
                            </div>
                            <div class="d-flex justify-content-around mb-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <?php include 'footer.php'?>

