<?php
include 'inc/init.inc.php'; // appel du fichier init.inc.php
// if($_POST)
// {
// 	if(isset($_POST['id_abonne'])) $id_abonne = $_POST['id_abonne']; else $id_abonne = ''; 
// 	$resultat = $pdo->query("REPLACE INTO abonne(id_abonne,prenom) VALUES('$id_abonne', '$_POST[prenom]')");
// }



echo '</select>';
// debut des affichages :
include 'inc/header.inc.php'; // appel du haut de site
include 'inc/nav.inc.php'; // appel de la nav
?>

<div class="container">
<!-- <?php 
/* 		
$liste_emprunt= $pdo->query('SELECT * FROM emprunt');

echo '<select name="test" id="test" style="height: 30px; width: 250px; border: 1px solid #dedede">';

while($ligne = $liste_emprunt->fetch(PDO::FETCH_ASSOC)) {
    echo '<option value="' . $ligne['id_emprunt'] . $ligne['id_livre'] . $ligne['id_abonne'] .  $ligne['date_sortie'] . $ligne['date_rendu']  .'</option>';
} */
?> -->

<div class="row">
      <div class="col-12 mx-auto">
          <form method="post">
              <div class="form-group">
                  <label for="id_abonne">abonne</label>
                  <input type="text" class="form-control" id="id_abonne" name="id_abonne" value="" >
              </div>
              <div class="form-group">
                  <label for="id_livre">Livre</label>
                  <input type="text" class="form-control" id="id_livre" name="id_livre" value="">
              </div>
              <div class="form-group">
                  <label for="date_sortie">date de sortie</label>
                  <input type="text" class="form-control" id="date_sortie" name="date_sortie" value="">
              </div>
              <div class="form-group">
                  <label for="date_rendu">date de rendu</label>
                  <input type="text" class="form-control" id="d" name="date_rendu" value="">
              </div>
              <div class="form-group"> 
                  <hr>                         
                  <button type="submit" class="mt-2 w-100 btn btn-outline-primary" id="connexion" name="connexion" ><i class="fas fa-ghost"></i> Se connecter <i class="fas fa-ghost"></i></button>
              </div>
          </form>
      </div>
  </div>

	</div>
		</section>
<?php include 'inc/footer.inc.php'; ?>