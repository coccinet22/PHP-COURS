<?php
    include 'inc/init.inc.php';



    include 'inc/header.inc.php';
    include 'inc/nav.inc.php';
?>
        <div class="row">
            <div class="col-sm-12">
                <h1>Livres</h1>
                <hr>
                <form method="post" class="border p-3">
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="auteur">Auteur</label>
                            <input type="text" name="auteur" id="auteur" value="" class="form-control">
                        </div>
                        <div class="form-group col-4">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" id="titre" value="" class="form-control">
                        </div>
                        <div class="form-group col-4">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-outline-primary w-100" name="enregistrer" id="enregistrer" >Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




<?php       
    include 'inc/footer.inc.php';