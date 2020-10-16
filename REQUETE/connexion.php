<?php
  $host = 'mysql:host=localhost;dbname=connexion';
  $login = 'root';
  $password = '';
  $options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
  );
  $pdo = new PDO($host, $login, $password, $options);
  
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="conteneur">
            <h1>Connexion</h1>
            <?php
            if(isset ($_POST['pseudo'])&& isset($_POST['mdp'])){
                $pseudo =$_POST['pseudo'];
                $mdp =$_POST['mdp'];
                $req="SELECT * FROM utilisateur WHERE pseudo='$pseudo' AND mdp='$mdp'";
                echo $req .'<hr>';
                $resultat= $pdo->query($req);

                if ($resultat->rowCount()<1){
                    echo '<div style="padding:20px;background-color:red; color:white; text-center;"> Attention, erreur sur le pseudo et ou le mot de passe. Veuillez verifier vos saisies</div>';
                }else{
                    $infos =$resultat->fetch(PDO::FETCH_ASSOC);
                    echo '<div style="padding:20px;background-color:green;color:white;text-center;">Connexion OK </div>';
                    foreach($infos AS $ind=>$val){
                        echo '<b>' . $ind .'</b>' . $val .'<hr>';
                    }
                }                }
            
            
            ?>

            <hr>
            
            <form method="post" action="" >
            
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" value=""><br><br>
                
                <label for="mdp">Mot de passe</label>
                <input type="text" name="mdp" id="mdp" value=""><hr>

                <input type="submit" name="valider" id="valider" value="Connexion">
            </form>
        </div>

    </body>
</html>