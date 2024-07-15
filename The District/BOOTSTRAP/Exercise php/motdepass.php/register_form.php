<?php
// Début du formulaire
echo '<form action="register_script.php" method="post">';
echo 'Nom : <input type="text" name="nom"><br>';
echo 'Prénom : <input type="text" name="prenom"><br>';
echo 'Adresse email : <input type="email" name="email"><br>';
echo 'Mot de passe : <input type="password" name="password"><br>';
echo 'Confirmation du mot de passe : <input type="password" name="password_confirm"><br>';
echo '<input type="submit" value="S\'inscrire">';
echo '</form>';
?>