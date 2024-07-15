<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ****script php qui affiche tous les nombres impairs entre 0 et 150, order croissant**** -->
    <h4>les nombres impairs entre 0 et 150</h4>
<?php
for($i=1; $i<=150; $i++){
    if($i%2 == 1){// if the remainder after division `$i` by 2 is 1
        echo $i,"<br/>";// if odd, echo it out and then echo newline for better readability  
    }
}
echo "</br>";
?>





<!--******2. programme qui écrit 500 fois la phrase*********  -->
<h4>programme qui écrit 500 fois la phrase</h4>
<?php
for($i=0;$i<500; $i++){
    echo "Je dois faire des sauvegardes régulières de mes fichiers.".$i."</br>";
}
?>
 




<!-- 3.script affiche la table de multiplication pour les nombres de 1 à 9 -->




<h4>table de multiplication pour les numbres de 1 à 9</h4>
<table border="1" cellpadding="3" cellspacing="0">
<?php
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 9; $j++) {
            echo "<td> ". $i * $j. "</td>";
        }
        echo "</tr>";
   
    }
?>
</table>
 <!-- or either the above with html either this bottom one with php -->
<!-- //  for ($i=1;$i <= 9; $i++){
//     for($j=1;$j<=9;$j++){
//         echo "[" .$i*$j."]";
//     }
//  echo "</br>";
// } -->









</body>
</html>
