<!-- Exercice 2.1
Pour cet exercice, nous allons créer plusieurs liens en HTML (qui pointent vers la même page) avec une récupération des paramètres en PHP.
L'objectif est de récupérer les paramètres véhiculés par l'url sur la même page.
Créez une page « lien.php ».

Exercice 2.2
Créer une page avec deux liens : homme, femme.
Récupérer le texte du lien cliqué en affichant le message "Vous êtes un Homme" ou "Vous êtes une femme".
Exercice 2.3
Créer une page1 avec plusieurs liens (contexte : carte de restaurant) : pizza, salade, viande, poisson.
Récupérer le plat cliqué (dans la page1) et afficher-le sur la page2 en adressant un message correspondant au choix de l'internaute.
Exemple si l'on a cliqué sur pizza : "Vous avez choisi de manger 1 pizza" .
 --> 
 <?php 
// $_GET représente l'url, il s'agit d'une superglobale, attention aux majuscules ! 
// dans une url, lorsque l'on voit un ?, avant le ? c'est l'adresse, après c'est des informations complémentaires que l'on retrouve dans $_GET naturellement

// ?article=jean&prix=40&couleur=bleu&quantite=1
// ?indice1=valeur1&indice2=valeur2&indice3=valeur3&indice4=valeur4

// Les superglobales sont des tableaux array ! 
// $_GET et $_POST existent toujours mais par défaut sont vides.

// terme superglobale car ces variables sont disponibles partout (environnement local et global)
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
if(!empty($_GET['pays']))
{
    echo 'vous êtes : ' . $_GET['pays'];
}
?>
 
<ul>
    <li><a href="?pays=français"> France </a></li>
    <li><a href="?pays=italien"> Italie </a></li>
    <li><a href="?pays=espagnol"> Espagne </a></li>
    <li><a href="?pays=anglais  "> Angleterrre </a></li>
</ul>  


        <h1 id="titre_page2">Page 2</h1>
        <hr>
        <a href="page1.php">HOMME</a>
        <a href="page1.php">FEMME</a>

        <hr>
   <a href="page1.php">pizza</a>
        <a href="page1.php">salade</a>
        <a href="page1.php">viande</a>
        <a href="page1.php">poisson</a>
        <?php 
        
        echo '<pre>';
        print_r($_GET);
        echo '</pre>';
     

        // if(isset($_GET['pizza']) && isset($_GET['salade']) && isset($_GET('viande')) && isset($_GET['poisson'])) {

        //     echo '<p>L\'article demandé est : ' . $_GET['pizza'] . '</p>';
        //     echo '<p>Le prix de cet article est : ' . $_GET['salade'] . '€</p>';
        //     echo '<p>La couleur de cet article est : ' . $_GET['viande'] . '</p>';
        //     echo '<p>La quantité demandé est  : ' . $_GET['poisson'] . '</p>';
        // }
            
        
        ?>


        
    </body>
</html>