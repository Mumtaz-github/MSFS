<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--**************************(i):Trouvez le numéro de semaine de la date suivante : 14/07/2019.******************* -->
    <h1>Exercice les dates et les heures</h1>
    <?php
    echo "<b>(i):trouvez le numéro de semaine de la date suivante.</b></br>";
    $dat = strtotime('2019-07-14');
    echo date("W ", $dat);  // sortie: 28 2019  ("W Y", $dat)
    echo "</br></br>"
    ?>


    <!--**************************(ii):Combien reste-t-il de jours avant la fin de votre formation.******************* -->
    <?php
    echo "<b>(ii):Combien reste-t-il de jours avant la fin de votre formation.</b></br>";
    $date_current = "2024-05-15"; // date de aujourd'hui
    $date_future = "2024-10-13";  // date expecté fini formation

    $datetime1 = new DateTime($date_current);
    $datetime2 = new DateTime($date_future);

    $interval = $datetime1->diff($datetime2);
    $days_left = $interval->days;

    echo "Number of days left: " . $days_left;
    echo "</br></br>"
    ?>
    <!--**************************(iii):Comment déterminer si une année est bissextile.******************* -->
    <?php
    echo "<b>(iii):Comment déterminer si une année est bissextile.</b></br>";
    function isLeapYear($year)
    {
        return date('L', strtotime("$year-01-01"));
    }

    $year = 2024;
    if (isLeapYear($year)) {
        echo "$year is a leap year.";
    } else {
        echo "$year is not a leap year.";
    }
    echo "</br></br>"
    ?>



    <!--**************************(iv):Montrez que la date du 32/17/2019 est erronée.******************* -->
    <?php
    echo "<b>(iv):Montrez que la date du 32/17/2019 est erronée.</b></br>";
    $date = "32/17/2019";

    if (strtotime($date)) {
        echo "The date is valid.";
    } else {
        echo "The date is invalid.";
    }
    echo "</br></br>"
    ?>

    <!--**************************(v):Montrez que la date du 32/17/2019 est erronée.******************* -->
    <?php
    echo "<b>(v):Affichez l'heure courante sous cette forme : 11h25..</b></br>";
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Europe/Paris')); //current time in France
    echo $date->format("h:i a");  // h est heure, i est minutes et a (ante meridiem) either p (post meridiem)
    echo "</br></br>"
    ?>


    <!--**************************(vi):Ajoutez 1 mois à la date courante.******************* -->
    <?php
    echo "<b>(vi):Ajoutez 1 mois à la date courante.</b></br>";
    $currentDate = date('d-m-Y');
    $newDate = date('d-m-Y', strtotime($currentDate . '+1 month'));
    echo $newDate;
    echo "</br></br>"
    ?>


    <!--**************************(vi):Que s'est-il passé le 1000200000.******************* -->
    <?php
    echo "<b>(vii):Que s'est-il passé le 1000200000.</b></br>";
    $timestamp = 1000200000;
    $date = new DateTime('@' . $timestamp);

    echo date('d-m-Y H:i:s', $timestamp);
    ?>
</body>

</html>