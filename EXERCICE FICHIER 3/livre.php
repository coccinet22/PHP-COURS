<?php
include 'inc/init.inc.php'; // appel du fichier init.inc.php

$id_livre ="";
$auteur='';
$titre='';

//enregistrement de l'article
if(isset($_POST['id_livre']) && isset($_POST['auteur'])&& isset($_POST['titre'])){
//on place les infos dans la variable plus simple d'ecriture et on applique au passage un trim() pour enlever les espaces
$id_livre = trim($_POST['id_livre']);
$auteur= trim($_POST['auteur']);
$titre= trim($_POST['titre']);

}

//on place les infos dans la variable plus simple d'ecriture et on applique au passage un trim() pour enlever les espaces
if(isset($_POST['id_livre']) && isset($_POST['auteur'])&& isset($_POST['titre'])){
$recup_abonne =$pdo->prepare("INSERT INTO livre (id_livre,auteur,titre) VALUES(NULL, :auteur,:titre)");

  $recup_abonne->bindParam(":auteur", $auteur, PDO::PARAM_STR);
  $recup_abonne->bindParam(":titre", $titre, PDO::PARAM_STR);
  $recup_abonne->execute();

    //$resultat = $recup_abonne->fetch(PDO:: FETCH_ASS);
 }

//controle le pseudo ne doit pas etre vide

// if(empty($auteur)){   // est ce que la variable est vide
//     $msg .='<div class="alert alert-danger mt-3">L auteur est obligatoire</div>';
//   }
//   if(empty($titre)){   // est ce que la variable est vide
//     $msg .='<div class="alert alert-danger mt-3">Le titre est obligatoire</div>';
//   }

echo '<table>';
   echo '<tr>';
         echo '<td>';
         echo 'Auteur :' . $_POST['auteur'];
         echo 'titre:' . $_POST['titre'];
         echo '</td>';
   echo '</tr>';
echo '</table>';


// debut des affichages :
include 'inc/header.inc.php'; // appel du haut de site
include 'inc/nav.inc.php'; // appel de la nav


?>


<div class="container">
<main role="main" class="container">
  <?php 
//   echo '<pre>'; 
//   print_r($_SESSION); 
//   echo '</pre>'; 
  ?>
  <div class="starter-template">
    <h1><i class="fas fa-ghost"></i> Livres</i></h1>
   
    
  </div>


  <div class="row">
      <div class="col-12 mx-auto">
          <form method="post">
              <div class="form-group">
                  <label for="auteur">auteur</label>
                  <input type="text" class="form-control" id="auteur" name="auteur" value="" >
              </div>
              <div class="form-group">
                  <label for="titre">Titre</label>
                  <input type="text" class="form-control" id="titre" name="titre" value="">
              </div>
         
              <div class="form-group"> 
                  <hr>                         
                  <button type="submit" class="mt-2 w-100 btn btn-outline-primary" id="enregistrer" name="enregistrer" ><i class="fas fa-ghost"></i> Enregistrer <i class="fas fa-ghost"></i></button>
              </div>
          </form>
      </div>
  </div>
</main><!-- /.container -->
<?php include 'inc/footer.inc.php'; ?>