<?php

// EXERCICE : Espace de dialogue (tchat, livre d'or, espace de commentaire)
// 01 - création de la BDD : dialogue
// 02 - création de la table commentaire
    // - id_commentaire INT (3) PK AI
    // - pseudo VARCHAR(255)
    // - message TEXT
    // - date_enregistrement (Date et heure) DATETIME (fonction permettant d'avoir cette information avec Mysql : NOW())
// 03 - Créer via PHP une connexion à cette BDD
// 04 - Création d'un formulaire html pour l'ajout des messages
    // - pseudo (input type="text")
    // - message (textarea)
    // - bouton submit
// 05 - Controle sur la récupération des informations du formulaire (isset sur les champs attendus) (var_dump() / print_r())
// 06 - Requete d'enregistrement dans la BDD
// 07 - Requete de récupération des messages afin de les afficher dans de l'html sous le formulaire (une boucle)
// 08 - Sur l'affichage des message : qui, quand et quoi
// 09 - Faire en sorte d'avoir les derniers messages en tête d'affichage (du plus récent vers le plus ancien)
// 10 - Afficher le nombre de message (Il y a X commentaires) (rowCount())
// 11 - Améliorer le visuel (html / css)



// ----------------------
include 'inc/init.inc.php'; // appel du fichier init.inc.php
include 'inc/functions.inc.php'; // appel du fichier contenant nos fonctions 
//Pour la conservation des saisies dans le chps
$pseudo='';
$message='';


// CODE ...validation formulaire

if(isset($_POST['pseudo'])&& isset($_POST['message'])){
  $pseudo = $_POST['pseudo'];
  $message = $_POST['message'];
  echo '<pre>'; print_r($_POST);echo'</pre>';
// fin du controle validation du formulaire

// on insert dans la BDD
//pour eviter une erreur en cas de ' ou " on utilises la fonctionaddslashes() qui corrige en mettant un antislash
//A utiliser avec query ou exec pas besoin de addslashes avec prepare()
// $pseudo =addslashes($pseudo);
// $message=addslashes($message);
// $pdo->query ("INSERT INTO commentaire(id_commentaire,pseudo,message,date_enregistrement)
// VALUES(NULL, '$pseudo', '$message', now()");

$enregistrement=$pdo ->prepare("INSERT INTO commentaire(id_commentaire,pseudo, message, date_enregistrement) VALUES(NULL, :pseudo, :message, NOW())");
$enregistrement->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
$enregistrement->bindParam(':message', $message, PDO::PARAM_STR);
$enregistrement->execute();
}

// debut des affichages :
include 'inc/header.inc.php'; // appel du haut de site
include 'inc/nav.inc.php'; // appel de la nav
?>

<main role="main" class="container pt5">

</div>
    <div class='row'>
        <div class="col-10 mx-auto pt-5 mt-5">
            <form method="post" >
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                          <label for="pseudo">Pseudo</label>
                          <input type="text" class="form-control" id="pseudo" name="pseudo" autocomplete="off" value="<?php echo $pseudo; ?>">
                      </div>

                      <div class="form-group">
                          <label for="message">Message</label>
                          <textarea class="form-control" id="message" name="message" ><?php echo $message; ?></textarea>
                      </div>
                      
                      <div class="form-group">                          
                          <button type="submit" class="mt-2 w-100 btn btn-primary" id="valider" name="valider" ><i class="fas fa-ghost"></i> Poster le message <i class="fas fa-ghost"></i></button>
                      </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php //echo'<pre>'; print_r($_POST); echo'</pre>';?>
    <div class="starter-template pt-5 mt-5">
        <h1><i class="fas fa-ghost"></i>Blog <i class="fas fa-ghost"></i></h1>
        <p class="lead">Bienvenue sur notre site.</p>
      
   
           
    
     <?php
$msg = $pdo->query("SELECT *FROM commentaire ");
echo '<style>th, td { margin-top:25; padding-top:-50px; }</style>'; // du style css pour le tableau
echo '<table border="1" style="width: 80%; border-collapse: collapse; ">';
echo '<tr style="background-color: #333; color: white;">';

echo '<th>Pseudo</th>';
echo '<th>Message</th>';
echo '</tr>';

while($ligne = $msg->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';    

    echo '<td>' . $ligne['pseudo'] . '</td>';
    echo '<td>' . $ligne['message'] . '</td>';    
    echo '</tr>';
}
echo '</table>';
    
 ?>  


</main><!-- /.container -->

<?php
include 'inc/footer.inc.php'; // appel du bas de site


