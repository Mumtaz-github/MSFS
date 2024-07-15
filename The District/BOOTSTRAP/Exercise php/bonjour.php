<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <h2>Months and Days</h2>
    <table border="1" cellpadding="3" cellspacing="0">
        <?php
            $months =[
                "Janvier" => 31,
                "Février" => 28,
                "Mars" => 31,
                "Avril" => 30,
                "Mai" => 31,
                "Juin" => 30,
                "Juillet" => 31,
                "Août" => 31,
                "Septembre" => 30,
                "Octobre" => 31,
                "Novembre" => 30,
                "Decembre" => 31,
            ];

            // Display the table
            foreach ($months as $month => $days) {
                echo "<tr>";
                echo "<td>$month</td>";
                echo "<td>$days</td>";
                echo "</tr>";
            }

            // Sort the table by the number of days
            uasort($months, function($a, $b) {
                return $a < $b;
            });

     $nom = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");   
     sort($nom);

     for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
     {
   echo "$nom[$nb1]<br>";
}

        ?>
    </table>


</body>
</html>