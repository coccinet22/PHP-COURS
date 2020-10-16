<?php
    include 'inc/init.inc.php';



    include 'inc/header.inc.php';
    include 'inc/nav.inc.php';
?>

        <div class="row">
            <div class="col-sm-12">
                <h1>Abonnés</h1>
                <hr>
                <form method="post" class="border p-3">
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" value="" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-outline-primary w-100" name="enregistrer" id="enregistrer" >Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



<?php       
    include 'inc/footer.inc.php';