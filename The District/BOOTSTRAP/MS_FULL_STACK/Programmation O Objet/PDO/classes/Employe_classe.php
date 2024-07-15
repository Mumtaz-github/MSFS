<!--Exercice 2 : gestion des employés
Programmation orientée objet (P.O.O.)-->

<?php

// Define a class called "Employe" (for "Employee")
class Employe {
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaire;
    private $service;
    private $magasin;

    // Constructor method to initialize the object
    public function __construct($nom, $prenom, $dateEmbauche, $fonction, $salaire, $service, $magasin) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaire = $salaire;
        $this->service = $service;
        $this->magasin = $magasin;
    }

    // Getter method to retrieve the employee's last name
    public function getNom() {
        return $this->nom;
    }
  
    // Getter method to retrieve the employee's first name
    public function getPrenom() {
        return $this->prenom;
    }
  // Method to calculate the employee's seniority (in years)
    public function getAnciennete() {
        $today = date("Y-m-d"); // Get the current date
        $diff = date_diff(date_create($this->dateEmbauche), date_create($today)); // Calculate the difference between the hire date and today's date
        return $diff->y;
    }

   // Method to calculate the employee's bonus (prime)
    public function getPrime() {
      $anciennete = $this->getAnciennete();   // Calculate the seniority
         $prime = ($this->salaire * 0.05) + ($this->salaire * 0.02 * $anciennete); // Calculate the bonus based on salary and seniority
        return $prime;
    }

    // Method to simulate the payment of the bonus (on a specific date)
    public function versePrime() {
       $today = date("Y-m-d"); // Get the current date
        if ($today == "2022-11-30") {    // Check if today is November 30th, 2022 (hardcoded date)
            $prime = $this->getPrime();
             // Output a message indicating the bonus payment
            echo "Ordre de transfert à la banque de $prime € pour $this->nom $this->prenom<br>";
        }
    }


  // Getter method to retrieve the employee's store (or branch)
    public function getMagasin() {
        return $this->magasin;
    }


    // Method to check if the employee is eligible for vacation checks
    public function peutDisposerChequesVacances() {

         // Calculate the seniority
        $anciennete = $this->getAnciennete();
          // Return true if the employee has at least 1 year of seniority
        if ($anciennete >= 1) {
            return true;
        } else {
            return false;
        }
    }


// Method to calculate the Christmas checks for the employee's children
    public function getChequesNoel($enfants) {

        // Initialize an empty array to store the Christmas checks
        $cheques = array();

          // Loop through the employee's children
        foreach ($enfants as $enfant) {
            // Check the child's age and calculate the corresponding Christmas check
            if ($enfant['age'] <= 10) {
                $cheques[] = array('montant' => 20, 'nombre' => 1);
            } elseif ($enfant['age'] <= 15) {
                $cheques[] = array('montant' => 30, 'nombre' => 1);
            } elseif ($enfant['age'] <= 18) {
                $cheques[] = array('montant' => 50, 'nombre' => 1);
            }
        }
        // Return the array of Christmas checks
        return $cheques;
    }


    // Getter method to retrieve the employee's salary
    public function getSalaire() {
        return $this->salaire;
    }



   // Getter method to retrieve the employee's department
    public function getService() {
        return $this->service;
    }
}

?>