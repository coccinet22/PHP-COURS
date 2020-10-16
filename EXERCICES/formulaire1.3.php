<!-- Exercice 1.3
Créer un formulaire en affichant les saisies récupérées sur deux pages différentes.
Champ à prévoir (contexte : voiture) : marque, modele, couleur, km, carburant, annee, prix, puissance, options. -->


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire 1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
        <div class="conteneur">
            <h1>Voiture</h1>
            <hr>
            <form method="POST" action="affichage_formulaire1.3.php" enctype="multipart/form-data">
                <label for="marque" texte>Marque</label>
                <input type="text" name="marque" id="marque" value="" placeholder="marque"><br><br>
                <label for="modele">Modèle</label>
                
                <input type="text" name="modele" id="modele" value="" placeholder="modele"><br><br>
                <label for="couleur">Couleur</label>
                <input type="text" name="couleur" id="couleur" value=""placeholder="couleur" ><br><br>
                
                <label for="km">Km</label>
                <input id="km" name="km" placeholder="km"></input><hr>

                <label for="carburant">Carburant</label>
                <input id="carburant" name="carburant"placeholder="carburant"></input><hr>
                <label for="annee">Annee</label>
                <input id="annee" name="annee" placeholder="annee"></input><hr>

                <label for="prix">Prix</label>
                <input id="prix" name="prix"placeholder="prix"></input><hr>

                <label for="puissance">Puissance</label>
                <input id="puissance" name="puissance" placeholder="puissance"></input><hr>

                <label for="options">Options</label>
                <input id="options" name="options"placeholder="options"></input><hr>
              
                <input type="submit" name="valider" id="valider" value="Valider">
            </form>
        </div>

    </body>
</html>