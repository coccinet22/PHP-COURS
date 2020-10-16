<!-- Exercice 1.1
Pour cet exercice, nous allons créer un formulaire en HTML avec une récupération des saisies en PHP.
L'objectif est de récupérer les saisies postées sur la même page (juste au dessus du formulaire).
Créez une page « formulaire.php ».
-->
<!-- 
Exercice 1.2
Créer un formulaire en affichant les saisies récupérées sur la même page.
Champ à prévoir (contexte : produit) : titre, couleur, taille, poids, prix, description, stock, fournisseur. -->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire 1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';

        // if(isset($_POST['prenom']) && isset($_POST['description']) ) {

        //     echo '<p>Nom : ' . $_POST['nom'] . '</p>';
        //     echo '<p>Prénom : ' . $_POST['prenom'] . '</p>';
        //     echo '<p>Adresse : ' . $_POST['adresse'] . '</p>';
        //     echo '<p>Code postal : ' . $_POST['code_postal'] . '</p>';
        //     echo '<p>sexe : ' . $_POST['sexe'] . '</p>';
        // }
        if(isset($_POST['titre']) && isset($_POST['couleur']) && isset($_POST['taille']) && isset($_POST['poids']) && isset ($_POST['prix']) && isset($_POST['description']) && isset($_POST['stock']) && isset($_POST['fournisseur'] )) {

            echo '<p>Titre : ' . $_POST['titre'] . '</p>';
            echo '<p>Couleur : ' . $_POST['couleur'] . '</p>';
            echo '<p>Taille: ' . $_POST['taille'] . '</p>';
            echo '<p>Poids : ' . $_POST['poids'] . '</p>';
            echo '<p>prix : ' . $_POST['prix'] . '</p>'; 
             echo '<p>Description : ' . $_POST['description'] . '</p>';
            echo '<p>Stock: ' . $_POST['stock'] . '</p>';
            echo '<p>Fournisseur: ' . $_POST['fournisseur'] . '</p>';
          
        }
        ?>


<!--         
        <div class="conteneur">
            <h1>Formulaire 1</h1>
            <hr>
            <form method="POST" action="" enctype="multipart/form-data">
                <label for="nom" texte>Nom</label>
                <input type="text" name="nom" id="nom" value="" placeholder="nom"><br><br>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" value="" placeholder="prenom"><br><br>
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" value=""placeholder="adresse" ><br><br>
                
                <label for="ville">Ville</label>
                <input id="ville" name="ville" placeholder="ville"></input><hr>

                <label for="code_postal">Code postal</label>
                <input id="code_postal" name="code_postal"placeholder="code_postal"></input><hr>

                <label for="sexe">Sexe</label>
                <select name="sexe"> 
                    <option value="homme" selected>homme</option>
                    <option value="femme">femme</option>
                    </select>
                    <br>
                <label for="description">Description</label>
                <textarea id="description" rows="7" name="description" placeholder="description"></textarea><hr>

                <input type="submit" name="valider" id="valider" value="Valider">
            </form>
        </div> -->
        <div class="conteneur">
            <h1>Formulaire 1</h1>
            <hr>
            <form method="POST" action="" enctype="multipart/form-data">
                <label for="titre" texte>titre</label>
                <input type="text" name="titre" id="titre" value="" placeholder="titre"><br><br>
                <label for="couleur">couleur</label>
                <input type="text" name="couleur" id="couleur" value="" placeholder="couleur"><br><br>
                <label for="taille">taille</label>
                <input type="text" name="taille" id="taille" value=""placeholder="taille" ><br><br>
                
                <label for="poids">poids</label>
                <input id="poids" name="poids" placeholder="poids"></input><hr>

                <label for="prix">prix</label>
                <input id="prix" name="prix"placeholder="prix"></input><hr>
                <label for="stock">stock</label>
                <input id="stock" name="stock" placeholder="stock"></input><hr>

                <label for="fournisseur">fournisseur</label>
                <input id="fournisseur" name="fournisseur"placeholder="fournisseur"></input><hr>
            
                    <br>
                <label for="description">Description</label>
                <textarea id="description" rows="7" name="description" placeholder="description"></textarea><hr>

                <input type="submit" name="valider" id="valider" value="Valider">
            </form>
        </div>

    </body>
</html>