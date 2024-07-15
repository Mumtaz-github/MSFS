<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--(i)***************************Une fonction qui permette de générer un lien***********************************-->
    <h1>Exercices</h1>
    <h2>(i):Ecrivez une fonction qui permette de générer un lien.
        La fonction doit prendre deux paramtres,le lien et le titre</h2>
    <?php
    function lien($link, $title)
    {
        return '<a href="' . $link . '">' . $title . '</a>';
    }
    // Usage
    echo lien("https://www.reddit.com/", "Reddit Hug");
    ?>


    <!--(ii)**************************Une fonction qui calcul le somme des valeurs*************************************-->
    <h2>(ii):Ecrivez une fonction qui calcul le somme des valeurs d'un tableau</h2>
    <?php
    function sum($array)
    {
        return array_sum($array);
    }
    $tab = array(4, 3, 8, 2);
    $result = sum($tab);
    echo "Sum of given array is " . $result;
    ?>

    <!--(iii)**************************Une fonction qui vérifie le niveau de complexité d'un mot de asse*******************-->
    <h2>(ii):Ecrivez une fonction qui vérifie le niveau de complexité d'un mot de passe</h2>
    <?php
function complex_password(string $password): bool
{
    // Check if the password is at least 8 characters long
    if (strlen($password) < 8) {
        return false;
    }

    // Check if the password has at least one digit /\d/
    if (!preg_match('/\d/', $password)) {
        return false;
    }

    // Check if the password has at least one uppercase [A-Z] and one lowercase [a-z] letter
    if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
        return false;
    }

   
    return true;
}

$result = complex_password("TopSecret42");
echo $result; // Output: true


 


?>








</body>

</html>