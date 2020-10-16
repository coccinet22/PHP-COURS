

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo '<hr>>Affichage session 1ere fois :<br>';
echo'<pre>'; print_($_SESSION);
echo '</pre>';

$_SESSION['pseudo']='admin';
$_SESSION['mdp']='soleil';
$_SESSION['email']='admin@mail.fr';
$_SESSION['date_naissance']='1980-01-01';

echo '<br>>Affichage session 2eme fois :<br>';
echo'<pre>'; print_($_SESSION);
echo '</pre>';

unset($_SESSION['mdp']);
echo '<hr>>Affichage session 3ème fois :<br>';
echo'<pre>'; print_($_SESSION);
echo '</pre>';

session_destroy();
echo '<hr>>Affichage session 4ème fois :<br>';
echo'<pre>'; print_($_SESSION);
echo '</pre>';
?>
</body>
</html>