<h1>Exercice 1 : création d'un personnage </h1>

<!--1 - Dans un dossier nommé POO, créez un dossier classes/ dans lequel vous créez un fichier Personnage.class.php.

2 - Créez une classe Personnage qui comprend les attributs suivants:

    nom
    prenom
    age
    sexe -->


<?php

class Personnage {
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function __construct($nom, $prenom, $age, $sexe) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setSexe($sexe);
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function __toString() {
        return "Nom : ". $this->getNom(). ", Prénom : ". $this->getPrenom(). ", Age : ". $this->getAge(). ", Sexe : ". $this->getSexe();
    }
}

?>