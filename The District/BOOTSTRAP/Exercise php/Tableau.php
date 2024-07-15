<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!--exercice tableau-->
  <!--1partie(i):  tableau associant à chaque mois de l'année le nombre de jours du mois-->
  <!--1partie(iii):votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois-->
  <?php

  $tableau = [
    ["Janvier", "31"],
    ["Fevrier", "28"],
    ["Mars", "31"],
    ["Avril", "30"],
    ["Mai", "31"],
    ["Juin", "30"],
    ["Juillet", "31"],
    ["Août", "31"],
    ["Septembre", "30"],
    ["Octobre", "31"],
    ["Novembre", "30"],
    ["Decembre", "31"],
  ];

  echo "<table border='1' cellpadding='3' cellspacing='0'>";
  echo "<tr>";
  echo "<th>Months</th>";
  echo "<th>Days</th>";
  echo "</tr>";

  foreach ($tableau as $row) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "</tr>";
  
    
  }
  ?>

  <!--1partie:(ii)Utilisez le nom des mois comme clés de votre tableau associatif.-->
  <!--1partie(iv)Triez ensuite votre tableau en utilisant comme critère le nombre de jour-->
  <?php
  echo "<br>";
  echo "<b>Triez ensuite votre tableau en utilisant comme critère le nombre de jours</b></br>";
  $tableau = array(
    "Janvier" => "31",
    "Fevrier" => "28",
    "Mars" => "31",
    "Avril" => "30",
    "Mai" => "31",
    "Juin" => "30",
    "Juillet" => "31",
    "Août" => "31",
    "Septembre" => "30",
    "Octobre" => "31",
    "Novembre" => "30",
    "Decembre" => "31",
  );
  arsort($tableau);
  foreach ($tableau as $cle => $valeur) {
    echo $cle . " : " . $valeur . "<br>";
  }
  echo "<br>";
  ?>



  <!--********** 2em partie(i)  La liste des capitales (par ordre alphabétique)************* -->

  <table border="1" cellpadding="3" cellspacing="0">
    <tr>
      <th>City</th>
      <th>Country</th>
    </tr>
    <?php
      echo "<br>";
    echo "<b>2(i): La liste des Capitales(par order alphabétique)</b>";
    $capitales = array(
      "Bucarest" => "Roumanie",
      "Bruxelles" => "Belgique",
      "Oslo" => "Norvège",
      "Ottawa" => "Canada",
      "Paris" => "France",
      "Port-au-Prince" => "Haïti",
      "Port-d'Espagne" => "Trinité-et-Tobago",
      "Prague" => "République tchèque",
      "Rabat" => "Maroc",
      "Riga" => "Lettonie",
      "Rome" => "Italie",
      "San José" => "Costa Rica",
      "Santiago" => "Chili",
      "Sofia" => "Bulgarie",
      "Alger" => "Algérie",
      "Amsterdam" => "Pays-Bas",
      "Andorre-la-Vieille" => "Andorre",
      "Asuncion" => "Paraguay",
      "Athènes" => "Grèce",
      "Bagdad" => "Irak",
      "Bamako" => "Mali",
      "Berlin" => "Allemagne",
      "Bogota" => "Colombie",
      "Brasilia" => "Brésil",
      "Bratislava" => "Slovaquie",
      "Varsovie" => "Pologne",
      "Budapest" => "Hongrie",
      "Le Caire" => "Egypte",
      "Canberra" => "Australie",
      "Caracas" => "Venezuela",
      "Jakarta" => "Indonésie",
      "Kiev" => "Ukraine",
      "Kigali" => "Rwanda",
      "Kingston" => "Jamaïque",
      "Lima" => "Pérou",
      "Londres" => "Royaume-Uni",
      "Madrid" => "Espagne",
      "Malé" => "Maldives",
      "Mexico" => "Mexique",
      "Minsk" => "Biélorussie",
      "Moscou" => "Russie",
      "Nairobi" => "Kenya",
      "New Delhi" => "Inde",
      "Stockholm" => "Suède",
      "Téhéran" => "Iran",
      "Tokyo" => "Japon",
      "Tunis" => "Tunisie",
      "Copenhague" => "Danemark",
      "Dakar" => "Sénégal",
      "Damas" => "Syrie",
      "Dublin" => "Irlande",
      "Erevan" => "Arménie",
      "La Havane" => "Cuba",
      "Helsinki" => "Finlande",
      "Islamabad" => "Pakistan",
      "Vienne" => "Autriche",
      "Vilnius" => "Lituanie",
      "Zagreb" => "Croatie"
    );
    ksort($capitales);
    foreach ($capitales as $city => $country) {
      echo "<tr>";
      echo "<td>$city</td>";
      echo "<td>$country</td>";
      echo "</tr>";
    }
    echo "<br>";
    ?>
  </table>



  <!--***********************2em partie(ii).La liste des pays (par ordre alphabétique suivie du nom de la capitale*******-->
  <!--*********************** .(iii) Le nombre de pays dans le tableau*********-->
  <table border="1" cellpadding="3" cellspacing="0">
    <tr>
      <th>City</th>
      <th>Country</th>
    </tr>
    <?php
    echo "<br>";
    echo "2(ii): La liste des pays(par order alphabétique)";
    $capitales = array(
      "Bucarest" => "Roumanie",
      "Bruxelles" => "Belgique",
      "Oslo" => "Norvège",
      "Ottawa" => "Canada",
      "Paris" => "France",
      "Port-au-Prince" => "Haïti",
      "Port-d'Espagne" => "Trinité-et-Tobago",
      "Prague" => "République tchèque",
      "Rabat" => "Maroc",
      "Riga" => "Lettonie",
      "Rome" => "Italie",
      "San José" => "Costa Rica",
      "Santiago" => "Chili",
      "Sofia" => "Bulgarie",
      "Alger" => "Algérie",
      "Amsterdam" => "Pays-Bas",
      "Andorre-la-Vieille" => "Andorre",
      "Asuncion" => "Paraguay",
      "Athènes" => "Grèce",
      "Bagdad" => "Irak",
      "Bamako" => "Mali",
      "Berlin" => "Allemagne",
      "Bogota" => "Colombie",
      "Brasilia" => "Brésil",
      "Bratislava" => "Slovaquie",
      "Varsovie" => "Pologne",
      "Budapest" => "Hongrie",
      "Le Caire" => "Egypte",
      "Canberra" => "Australie",
      "Caracas" => "Venezuela",
      "Jakarta" => "Indonésie",
      "Kiev" => "Ukraine",
      "Kigali" => "Rwanda",
      "Kingston" => "Jamaïque",
      "Lima" => "Pérou",
      "Londres" => "Royaume-Uni",
      "Madrid" => "Espagne",
      "Malé" => "Maldives",
      "Mexico" => "Mexique",
      "Minsk" => "Biélorussie",
      "Moscou" => "Russie",
      "Nairobi" => "Kenya",
      "New Delhi" => "Inde",
      "Stockholm" => "Suède",
      "Téhéran" => "Iran",
      "Tokyo" => "Japon",
      "Tunis" => "Tunisie",
      "Copenhague" => "Danemark",
      "Dakar" => "Sénégal",
      "Damas" => "Syrie",
      "Dublin" => "Irlande",
      "Erevan" => "Arménie",
      "La Havane" => "Cuba",
      "Helsinki" => "Finlande",
      "Islamabad" => "Pakistan",
      "Vienne" => "Autriche",
      "Vilnius" => "Lituanie",
      "Zagreb" => "Croatie"
    );
    asort($capitales);
    foreach ($capitales as $city => $country) {
      echo "<tr>";
      echo "<td >$city</td>";
      echo "<td>$country</td>";
      echo "</tr>";
    }
    ?>


    <!--2em partie(iv).*****Supprimer du tableau toutes les capitales ne commençant par la lettre 'B'****** -->
    <table>
      <tr>
        <th>Capital</th>
        <th>Country</th>
      </tr>
      <?php
      echo "<br>";
      echo "2(iii): La nombres de capitales est de : " . count($capitales) . "<br>";
      echo "<br>2(iv): Tableau toutes les capitales ne commençant par la lettre 'B'";
      $capitales = array(

        "Bucarest" => "Roumanie",

        "Bruxelles" => "Belgique",

        "Oslo" => "Norvège",

        "Ottawa" => "Canada",

        "Paris" => "France",

        "Port-au-Prince" => "Haïti",

        "Port-d'Espagne" => "Trinité-et-Tobago",

        "Prague" => "République tchèque",

        "Rabat" => "Maroc",

        "Riga" => "Lettonie",

        "Rome" => "Italie",

        "San José" => "Costa Rica",

        "Santiago" => "Chili",

        "Sofia" => "Bulgarie",

        "Alger" => "Algérie",

        "Amsterdam" => "Pays-Bas",

        "Andorre-la-Vieille" => "Andorre",

        "Asuncion" => "Paraguay",

        "Athènes" => "Grèce",

        "Bagdad" => "Irak",

        "Bamako" => "Mali",

        "Berlin" => "Allemagne",

        "Bogota" => "Colombie",

        "Brasilia" => "Brésil",

        "Bratislava" => "Slovaquie",

        "Varsovie" => "Pologne",

        "Budapest" => "Hongrie",

        "Le Caire" => "Egypte",

        "Canberra" => "Australie",

        "Caracas" => "Venezuela",

        "Jakarta" => "Indonésie",

        "Kiev" => "Ukraine",

        "Kigali" => "Rwanda",

        "Kingston" => "Jamaïque",

        "Lima" => "Pérou",

        "Londres" => "Royaume-Uni",

        "Madrid" => "Espagne",

        "Malé" => "Maldives",

        "Mexico" => "Mexique",

        "Minsk" => "Biélorussie",

        "Moscou" => "Russie",

        "Nairobi" => "Kenya",

        "New Delhi" => "Inde",

        "Stockholm" => "Suède",

        "Téhéran" => "Iran",

        "Tokyo" => "Japon",

        "Tunis" => "Tunisie",

        "Copenhague" => "Danemark",

        "Dakar" => "Sénégal",

        "Damas" => "Syrie",

        "Dublin" => "Irlande",

        "Erevan" => "Arménie",

        "La Havane" => "Cuba",

        "Helsinki" => "Finlande",

        "Islamabad" => "Pakistan",

        "Vienne" => "Autriche",

        "Vilnius" => "Lituanie",

        "Zagreb" => "Croatie"

      );
      foreach ($capitales as $capital => $pays) {
        if (strpos($capital, 'B') === 0) {
          echo "<tr>";
          echo "<td>" . $capital . "</td>";
          echo "<td>" . $pays . "</td>";
          echo "</tr>";
        }
      }
      ?>
     
    </table>





    <!--3em partie Départements--> 
     <!--(i) la liste des régions (par ordre alphabétique) suivie du nom des départements--> 
     <!--(ii) la liste des régions suivie du nombre de départements--> 

 <table border="1" cellpadding="3" cellspacing="0">

  <?php
   echo "</br>";
  echo"(i)La liste des régions (par ordre alphabétique) suivie du nom des départements</br>";
  echo "(ii)La liste des régions suivie du nombre de départements";
   $departments = array(
"Hauts-de-france" => ["Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"],
"Bretagne" => ["Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"],
"Grand-Est" => ["Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"],
"Normandie" => ["Calvados", "Eure", "Manche", "Orne", "Seine-Maritime"]
   );
ksort($departments);
//Create an HTML table
echo'<table border="1" cellpadding="3" cellspacing="0">';
foreach ($departments as $region => $departements) {
echo '<tr><th>' . $region . '</th></tr>';
echo '<tr><td>';
foreach ($departements as $departement) {
 echo $departement . '<br>';
}
echo '</td></tr>';
}
?>
</table>







</body>

</html>