<?php

class Plat {
  public $id;
  public $nom;
  public $description;
  public $prix;
  public $categorie;

  public function __construct($id, $nom, $description, $prix, $categorie) {
    $this->id = $id;
    $this->nom = $nom;
    $this->description = $description;
    $this->prix = $prix;
    $this->categorie = $categorie;
  }

  public function afficher() {
    echo $this->id . " " . $this->nom . " : " . $this->description . " (" . $this->prix . "€) " . $this->categorie;




// Inclusion des fichiers Plat.php, Categorie.php, PlatSpecial.php
require_once('Categorie.php');
require_once('Plat.php');
require_once('PlatSpecial.php');

// Création d'une instance de la classe Categorie
$categoriePizza = new Categorie(1, "Pizzas", "Les meilleures pizzas du monde !");

// Création d'une instance de la classe Plat
$platMargherita = new Plat(1, "Margherita", "Tomate, mozzarella, basilic", 9.50, $categoriePizza);

// Création d'une instance de la classe PlatSpecial
$calzone = new PlatSpecial(1, "Calzone", "Tomate, mozzarella, jambon, champignons", 12.50, $categoriePizza, "Spécialité du chef");

// Affichage des propriétés des objets
$categoriePizza->afficher() ;
echo "\n";

// Affiche "1 Pizzas : Les meilleures pizzas du monde !"
$platMargherita->afficher();
echo "\n";
// Affiche "1 Margherita : Tomate, mozzarella, basilic (9.5€) 1 - Pizzas"
$calzone->afficher();
echo "\n";
// Affiche "1 Calzone : Tomate, mozzarella, jambon, champignons" (12.5€) Spécialité de chef

$calzone->afficher(); // Affiche le plat
$calzone->categorie->afficher(); // Affiche la catégorie du plat


    // *Attention: $this->categorie ne fonctionnera pas si sur la classe Categorie il n'y a pas de fonction 
    // magique __toString() qui nous permet de traiter un objet comme chaîne de caractères! 
    // Dans ce cas, vous devez ou la rajouter ou alors appeler un ou plusieurs attributs de la classe 
    // Categorie.  
    // Par ex: $this->categorie->nom (si la propriété nom est declarée comme publique) ou 
    // $this->categorie->getNom() (si la propriété est déclarée comme privée, mais qu'elle a un getter 
    // (c'est-à-dire une fonction publique getNom()))



  }
}
?>