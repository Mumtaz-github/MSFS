



<?php

// Get current date and time
$dateTime = new DateTime();
$formattedDateTime = $dateTime->format('Y-m-d-H-i-s');

// Declare the variable with the requested data
$myVar = "\n".$_REQUEST['NomPrenom'].",".$_REQUEST['email'].",".$_REQUEST['phone'].",".$_REQUEST['demande'];

// Create the file name with the current date and time
$filename = $formattedDateTime . '.txt';

// Open the file in append mode
$fp = fopen($filename, "a");

// Write the content to the file
fputs($fp, $myVar);

// Close the file
fclose($fp);
?>