<h1>Créez un deuxième fichier MonPerso.php permettant de vérifier le bon fonctionnement de votre classe,</h1>

<?php

require_once 'Personnage_classe.php';

$p = new Personnage("Lebowski", "Jeff", 30, "Masculin");
echo "Nom : ". $p->getNom(). "<br><br>";
echo "Prénom : ". $p->getPrenom(). "<br><br>";
echo "Age : ". $p->getAge(). "<br><br>";
echo "Sexe : ". $p->getSexe(). "<br><br>";

?> 

<!-- < ?php

// require_once 'Personnage_classe.php';


// $p = new Personnage("Lebowski", "Jeff", 30, "Masculin");
// echo $p;

?> -->