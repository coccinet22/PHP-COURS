
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
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

 
                if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['telephone']) && isset($_POST['profession']) && isset ($_POST['ville']) && isset($_POST['cp']) && isset($_POST['adresse']) && isset($_POST['sexe'] ) &&  isset($_POST['date_naissance']) && isset($_POST['description'] )){
        $nom = trim($_POST['nom']);
        $prenom= trim($_POST['prenom']);
        $telephone = trim($_POST['telephone']);
        $profession= trim($_POST['profession']);
        $ville= trim($_POST['ville']);
        $cp = trim($_POST['cp']);
        $adresse = trim($_POST['adresse']);
        $sexe = trim($_POST['sexe']);
        $date_naissance= trim($_POST['date_naissance']);
        $description= trim($_POST['description']);


                    $req = "SELECT * FROM annuaire";
                     echo $req . '<hr>';

                    // on execute la requete.
                    $enregistrement= $pdo->prepare($req);

                  
    $enregistrement->bindParam(':nom', $nom, PDO::PARAM_STR);
    $enregistrement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $enregistrement->bindParam(':telephone', $telephone, PDO::PARAM_STR);
    $enregistrement->bindParam(':profession', $prenom, PDO::PARAM_STR);
    $enregistrement->bindParam(':ville', $ville, PDO::PARAM_STR);
    $enregistrement->bindParam(':cp', $cp, PDO::PARAM_STR);
    $enregistrement->bindParam(':adresse', $adresse, PDO::PARAM_STR);
    $enregistrement->bindParam(':sexe', $sexe, PDO::PARAM_STR);
    $enregistrement->bindParam(':date_naissance', $date_naissance, PDO::PARAM_STR);
    $enregistrement->bindParam(':description', $description, PDO::PARAM_STR);
    $enregistrement->execute();

                    
                    if($enregistrement->rowCount() < 1) {
                        // s'il n'y a pas de ligne dans $resultat, alors erreur sur le pseudo et ou le mdp
                        echo '<div style="padding: 20px; background-color: red; color: white; text-align : center;">Attention,<br> erreur sur le pseudo et/ou le mot de passe.<br>Veuillez vérifier vos saisies</div>';
                    } else {
                        // on a une ligne donc le pseudo et le mdp sont corrects
                        // on traite la ligne avec un fetch pour la transformer en tableau array
                        $infos = $enregistrement->fetch(PDO::FETCH_ASSOC);
                        echo '<div style="padding: 20px; background-color: green; color: white; text-align: center;">Connexion Ok!</div><hr>';

                        foreach($infos AS $ind => $val) {
                            echo '<b>' . $ind . ' : </b>' . $val . '<hr>';
                        }

                    } 
                }// fin des if isset
            ?>

        
        <div class="conteneur">
            <h1>Annuaire</h1>
            <hr>
            <form method="POST" action="affichage_annuaire.php" enctype="multipart/form-data">
                <label for="nom" texte>Nom</label>
                <input type="text" name="nom" id="nom" value="" ><br><br>
                
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" value="" ><br><br>
                
                <label for="telephone">telephone</label>
                <input type="text" name="telephone" id="telephone" value=""><br><br>
                
                <label for="profession">Profession</label>
                <input type="text" name="profession" id="profession" value="" ><br><br>
                
                
                <label for="ville">Ville</label>
                <input id="ville" name="ville" ></input><hr>

                <label for="code_postal">Code postal</label>
                <input id="code_postal" name="code_postal"></input><hr>

                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" value="" ><br><br>

                <label for="date_naissance">Date de Naissance</label>
                <input id="date" type="date" value="2017-06-01"><hr>

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
        </div>
        

    </body>
</html>