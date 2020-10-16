<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Affichage formulaire 2</title>
    </head>
    <body>
        <div class="conteneur">

            <?php 
             

                // afficher proprement le pseudo et le mail (si ça existe)
                     
        if(isset($_POST['marque']) && isset($_POST['modele']) && isset($_POST['couleur']) && isset($_POST['km']) && isset ($_POST['carburant']) && isset($_POST['annee']) && isset($_POST['prix']) && isset($_POST['puissance'] )&& isset($_POST['options'] )) {

            echo '<p>Marque : ' . $_POST['marque'] . '</p>';
            echo '<p>modele: ' . $_POST['modele'] . '</p>';
            echo '<p>couleur: ' . $_POST['couleur'] . '</p>';
            echo '<p>KM : ' . $_POST['km'] . '</p>';
            echo '<p>carburant: ' . $_POST['carburant'] . '</p>'; 
             echo '<p>Année : ' . $_POST['annee'] . '</p>';
            echo '<p>Prix: ' . $_POST['prix'] . '</p>';
            echo '<p>puissance: ' . $_POST['puissance'] . '</p>';
            echo '<p>options: ' . $_POST['options'] . '</p>';
        }
        ?>


</div>
</body>
</html>