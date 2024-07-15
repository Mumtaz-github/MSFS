<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!--(i)**************************Lecture d'un fichier*******************-->
     <h2>Ecrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes</h2>
<?php
 $links = file("liens.txt");

// array(
//     "http://www.python.org/",
//     "https://fr.wikipedia.org/wiki/Joel_et_Ethan_Coen",
//     "http://fr.wikipedia.org/wiki/Sp%C4%B1n%CC%88al_Tap",
//     "https://www.theclash.com/landing/",
//     "http://theforensics.net/"
//   );

//   echo "<html><body>";
  echo "<h1>Hyperlinks</h1>";
  echo "<ul>";

  foreach ($links as $link) {
    echo "<li><a href=\"$link\">$link</a></li>";
  }

  echo "</ul>";
//   echo "</body></html>"; 
?>

<!--(ii)**************************Récupération d'un fichier distant*******************-->
<h2>(1):Utilisez la fonction file() pour récupérer le contenu de ce fichier</h2>
<?php
$names=file('customers.csv'); /* customers.csv is a file name*/ 
// To check the number of lines 
echo count($names).'<br>';
foreach($names as $name)
{
   echo $name.'<br>';
}
echo "</br>"
?>



<!--(ii)**************************Récupération d'un fichier distant*******************-->
<h2> (2):Découpez chaque ligne en utilisant une des fonctions suivantes explode ou preg_split()</h2>
<h2>(3):Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau</h2>
<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center">Customers</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $file = file('https://ncode.amorce.org/customers.csv');
                foreach ($file as $line) {
                    $data = str_getcsv($line);   /* str_getcsv function use as split */ 
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                    echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                    echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                    echo "<td>" . htmlspecialchars($data[3]) . "</td>";
                    echo "<td>" . htmlspecialchars($data[4]) . "</td>";
                    echo "<td>" . htmlspecialchars($data[5]) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>





