<?php
include 'inc/init.inc.php'; // appel du fichier init.inc.php

$prenom ="";
if(
    isset($_POST['prenom'])
){
    $prenom =trim($_POST['prenom']);
}

//enregistrement de l'article
 if(isset($_POST['prenom'])){
//on place les infos dans la variable plus simple d'ecriture et on applique au passage un trim() pour enlever les espaces

$recup_abonne =$pdo->prepare("INSERT INTO abonne (id_abonne,prenom) VALUES(NULL, :prenom)");

  $recup_abonne->bindParam(":prenom", $prenom, PDO::PARAM_STR);
  $recup_abonne->execute();

    //$resultat = $recup_abonne->fetch(PDO:: FETCH_ASS);
 }

  
//controle le pseudo ne doit pas etre vide
// if(empty($prenom)){   // est ce que la variable est vide
//   $msg .='<div class="alert alert-danger mt-3">Le pseudo est obligatoire</div>';
// }

include 'inc/header.inc.php'; // appel du haut de site
include 'inc/nav.inc.php'; // appel de la nav


// $liste_abonne = $pdo->query('SELECT * FROM abonne');

// echo '<select name="test" id="test" style="height: 30px; width: 250px; border: 1px solid #dedede">';

// while($ligne = $liste_abonne->fetch(PDO::FETCH_ASSOC)) {
//     echo '<option value="' . $ligne['id_abonne'] . '">' . $ligne['prenom'] .  '</option>';
// }

// echo '</select>';
?>


<div class="container">

    <div class="row">
        <div class="col-12 mx-auto">
            <form method="post">
                <div class="form-group">
                    <label for="prenom">prenom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="">
                </div>
        
                <div class="form-group"> 
                    <hr>                         
                    <button type="submit" class="mt-2 w-100 btn btn-outline-primary" id="enregistrer" name="enregistrer" ></i> Enregistrer </i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

echo '<table>';
   echo '<tr>';
         echo '<td>';
         echo 'Prenom :' . $_POST['prenom'];
         echo '</td>';
   echo '</tr>';
echo '</table>';
?>
<?php include 'inc/footer.inc.php'; ?>