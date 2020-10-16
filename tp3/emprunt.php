<?php
    include 'inc/init.inc.php';

    if(isset($_POST['date_sortie'])) {
        $date_fr_to_en = explode('/', $_POST['date_sortie']);
        // echo '<pre>'; print_r($date_fr_to_en); echo '</pre>';
        $date_sortie_en = $date_fr_to_en[2] . '-' . $date_fr_to_en[1] . '-' . $date_fr_to_en[0];
        // echo $date_sortie_en; 
    }


    include 'inc/header.inc.php';
    include 'inc/nav.inc.php';
    // echo '<pre>'; print_r($_POST); echo '</pre>';
?>

        <div class="row">
            <div class="col-sm-12">
                <h1>Emprunts</h1>
                <hr>
                <form method="post" class="border p-3">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="abonne">Abonné</label>
                            <select name="abonne" class="form-control">

                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="livre">Livre</label>
                            <select name="livre" class="form-control">
                                
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="date_sortie">Date sortie</label>
                            <input type="text" autocomplete="off" name="date_sortie" id="date_sortie" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="date_rendu">Date rendu</label>
                            <input type="text" autocomplete="off" name="date_rendu" id="date_rendu" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-outline-primary w-100" name="enregistrer" id="enregistrer" >Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



<?php       
    include 'inc/footer.inc.php';