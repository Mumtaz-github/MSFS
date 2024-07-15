<?php
// Define a class called Magasin (French for "store")
class Magasin {
     // Private properties (data members) of the class
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    private $modeRestauration; // store mode of restoration (e.g. dine-in, take-out, etc.)

    // Constructor method (called when an object is created from the class)
    public function __construct($nom, $adresse, $codePostal, $ville, $modeRestauration) {
        // Initialize the private properties with the values passed to the constructor
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->modeRestauration = $modeRestauration;
    }


 // Getter method to retrieve the mode of restoration
    public function getModeRestauration() {
         // Return the value of the private $modeRestauration property
        return $this->modeRestauration;
    }


    // Getter method to retrieve the store name
    public function getnom(){
           // Return the value of the private $nom property
        return $this->nom;
    }
}

?>