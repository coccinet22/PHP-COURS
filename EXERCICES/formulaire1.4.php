
<!-- 
Exercice 1.4
Créer un formulaire en affichant les saisies récupérées et en controlant que le pseudo soit compris entre 3 et 10 caractères maximum (sinon prévoir un
message d'erreur).
Champ à prévoir (contexte : membre) : pseudo, mdp, email -->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire 2</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
   
        <div class="conteneur">
            <h1>Formulaire 2</h1>
            <hr>
            <form method="POST" action="" enctype="multipart/form-data">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" value=""><br><br>
                
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value=""><hr>

                        
                <label for="mdp">Mot de passe</label>
                <input type="text" name="mdp" id="mdp" value=""><hr>

                <input type="submit" name="valider" id="valider" value="Valider">
            </form>
        </div>
        <?php 

// afficher proprement le pseudo et le mail (si ça existe)
if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['mdp'])) {
    echo '<p>Pseudo : ' . $_POST['pseudo'] . '</p>';
    echo '<p>Email : ' . $_POST['email'] . '</p><hr>';
    echo '<p>Mot de passe : ' . $_POST['mdp'] . '</p><hr>';
}
$pseudo=$_POST['pseudo'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];
echo '<p>Taille du pseudo' . iconv_strlen($pseudo) . '</p>';

if(iconv_strlen($pseudo)<3 || iconv_strlen($pseudo) >10){
    echo '<div class="erreur"> Attention, le pseudo doit avoir entre 4 et 14 caractères inclus <hr> Veuillez verifier vos saisies !</div>';
}


//verifier valide email
if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo '<div class="erreur"> Attention, le mail n\'a pas un format valide <hr> Veuillez verifier vos saisies !</div>';
}
?>
    </body>
</html>