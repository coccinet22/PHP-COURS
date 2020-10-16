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

        if(isset($_POST['prenom']) && isset($_POST['description']) ) {

            echo '<p>Prénom : ' . $_POST['prenom'] . '</p>';
            echo '<p>Description : ' . $_POST['description'] . '</p>';
        }
        ?>


        
        <div class="conteneur">
            <h1>Formulaire 1</h1>
            <hr>
            <form method="POST" action="" enctype="multipart/form-data">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" value=""><br><br>
                
                <label for="description">Description</label>
                <textarea id="description" rows="7" name="description"></textarea><hr>

                <input type="submit" name="valider" id="valider" value="Valider">
            </form>
        </div>

    </body>
</html>