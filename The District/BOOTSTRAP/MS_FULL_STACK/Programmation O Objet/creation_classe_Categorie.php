<?php

class Categorie {
  public $id;
  public $nom;
  public $description;

  public function __construct($id, $nom, $description) {
    $this->id = $id;
    $this->nom = $nom;
    $this->description = $description;
  }


  

  public function afficher() {
    echo $this->id . " " . $this->nom . " : " . $this->description;
  }

// La méthode magique __toString() est appelée automatiquement quand on tente de traiter un objet 
// en tant que chaîne de caractères (à l'aide de la structure echo par exemple). 
// Dans ce cas, cette méthode retourne la chaîne de caractères de notre choix.
// La fonction __toString sur la classe Categorie va retourner l'id et le nom de la catégorie

  public function __toString(){
    return $this->id . " - " .$this->nom;
}

}
?>