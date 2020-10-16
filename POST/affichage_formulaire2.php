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

<!-- // EXERCICE : 
// Controler la taille du pseudo, le pseudo doit avoir entre 4 et 14 caractères inclus. ( iconv_strlen() ) -->

            <?php 
                 echo '<pre>'; var_dump($_POST); echo '</pre>';

                // afficher proprement le pseudo et le mail (si ça existe)
                if(isset($_POST['pseudo']) && isset($_POST['email'])) {
                    echo '<p>Pseudo : ' . $_POST['pseudo'] . '</p>';
                    echo '<p>Email : ' . $_POST['email'] . '</p><hr>';
                }
                $pseudo=$_POST['pseudo'];
                $email=$_POST['email'];
                echo '<p>Taille du pseudo' . iconv_strlen($pseudo) . '</p>';

                if(iconv_strlen($pseudo)<4 || iconv_strlen($pseudo) >14){
                    echo '<div class="erreur"> Attention, le pseudo doit avoir entre 4 et 14 caractères inclus <hr> Veuillez verifier vos saisies !</div>';
                }
//verifier valide email
if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo '<div class="erreur"> Attention, le mail n\'a pas un format valide <hr> Veuillez verifier vos saisies !</div>';
}
?>


</div>
</body>
</html>