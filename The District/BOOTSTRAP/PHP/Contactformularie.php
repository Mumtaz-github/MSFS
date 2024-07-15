<!-- 

// // On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
//  $myVar = "\n".$_REQUEST['Nom'].",".$_REQUEST['Prenom'].",".$_REQUEST['Email'].",".$_REQUEST['PhoneNumber'].",".$_REQUEST['Demande'];

// // Ouverture en écriture seule 
// $fp = fopen("AAAA-MM-JJ-HH-MM-SS.txt", "a"); 

// // Ecriture du contenu ($myVar) 
// fputs($fp, $myVar); 

// // Fermeture du fichier  
// fclose($fp); 

?> -->




<?php
// Get current date and time
$dateTime = new DateTime();
$formattedDateTime = $dateTime->format('Y-m-d-H-i-s');

// Declare the variable with the requested data
$myVar = "\n".$_REQUEST['Nom'].",".$_REQUEST['Prenom'].",".$_REQUEST['Email'].",".$_REQUEST['PhoneNumber'].",".$_REQUEST['Demande'];

// Create the file name with the current date and time
$filename = $formattedDateTime. '.txt';

// Open the file in append mode
$fp = fopen($filename, "a");

// Write the content to the file
fputs($fp, $myVar);

// Close the file
fclose($fp);
?>