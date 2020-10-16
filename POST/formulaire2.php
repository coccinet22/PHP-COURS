<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire 2</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';

        ?>

        
        <div class="conteneur">
            <h1>Formulaire 2</h1>
            <hr>
            <form method="POST" action="affichage_formulaire2.php" enctype="multipart/form-data">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" value=""><br><br>
                
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value=""><hr>

                <input type="submit" name="valider" id="valider" value="Valider">
            </form>
        </div>

    </body>
</html>