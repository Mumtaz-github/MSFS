<?php

require_once 'Employe_classe.php';// Include the Employe class file
require_once 'Magasin_classe.php';

// Create three Magasin objects
$magasin1 = new Magasin("Magasin 1", "1 rue de la Paix", "75001", "Paris", "Restaurant d'entreprise");
$magasin2 = new Magasin("Magasin 2", "2 rue de la République", "69001", "Lyon", "Tickets restaurants");
$magasin3 = new Magasin("Magasin 3", "3 rue de la Liberté", "33000", "Bordeaux", "Restaurant d'entreprise");

// Create five Employe objects, each associated with a Magasin object
$employe1 = new Employe("DUPONT", "Pierre", "2010-01-01", "Vendeur", 40000, "Commercial", $magasin1);
$employe2 = new Employe("DURAND", "Marie", "2012-06-01", "Comptable", 50000, "Comptabilité", $magasin2);
$employe3 = new Employe("LEFEBVRE", "Jean", "2015-03-01", "Responsable", 60000, "Direction", $magasin3);
$employe4 = new Employe("MARTIN", "Sophie", "2018-09-01", "Vendeuse", 35000, "Commercial", $magasin1);
$employe5 = new Employe("ROUSSEAU", "François", "2019-01-01", "Technicien", 45000, "Technique", $magasin2);

$employes = array($employe1, $employe2, $employe3, $employe4, $employe5); // Create an array of Employe objects

// Loop through the array of Employe objects
foreach ($employes as $employe) { 
     // Display the employee's name and last name
    echo "Employé : ". $employe->getNom(). " ". $employe->getPrenom(). "<br>";
    flush(); // Output the buffer to the browser

     // Display the employee's associated Magasin object
    echo "Magasin : ". $employe->getMagasin()->getNom(). " - Mode de restauration : ". $employe->getMagasin()->getModeRestauration(). "<br>";
    flush();

    // Display the employee's bonus (prime)
    echo "Prime : ". $employe->getPrime(). " €<br>";
    flush();

    // Simulate the payment of the bonus (on a specific date)
    $employe->versePrime();
    echo "Ancienneté : ". $employe->getAnciennete(). " ans<br>";
    flush();

     // Check if the employee is eligible for vacation checks
    if ($employe->peutDisposerChequesVacances()) {
        echo "Peut disposer de chèques-vacances : Oui<br>";
    } else {
        echo "Peut disposer de chèques-vacances : Non<br>";
    }
    flush();

     // Define an array of children with their ages
    $enfants = array(
        array('age' => 8),
        array('age' => 12),
        array('age' => 16)
    );

     // Calculate the Christmas checks for the employee's children
    $chequesNoel = $employe->getChequesNoel($enfants);

      // Display the Christmas checks
    if (!empty($chequesNoel)) {
        echo "Chèques Noël : <br>";
        foreach ($chequesNoel as $cheque) {
            echo " - ". $cheque['nombre']. " chèque(s) de ". $cheque['montant']. " €<br>";
            flush();
        }
    } else {
     echo "Chèques Noël : Non<br>";
        flush();
    }

    // Add a horizontal rule to separate the employees
    echo "<hr>";
    flush();
}

?>