<?php

//dans ce fichier nous allons mettre en place un script permettant d'afficher n'importe quelle requete sous forme de tableau

$host = 'mysql:host=localhost;dbname=repertoire';
$login = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
$pdo = new PDO($host, $login, $password, $options);

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

      $resultat = $pdo->prepare("INSERT INTO annuaire (id_annuaire,nom, prenom, telephone, profession, ville, cp,adresse, sexe, date_naissance, description) VALUES (NULL,:nom, :prenom, :telephone, :profession, :ville, :cp, :adresse, :sexe, :date_naissance, :description)");

    // $enregistrement->bindParam(':nom', $nom, PDO::PARAM_STR);
    // $enregistrement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    // $enregistrement->bindParam(':telephone', $telephone, PDO::PARAM_STR);
    // $enregistrement->bindParam(':profession', $prenom, PDO::PARAM_STR);
    // $enregistrement->bindParam(':ville', $ville, PDO::PARAM_STR);
    // $enregistrement->bindParam(':cp', $cp, PDO::PARAM_STR);
    // $enregistrement->bindParam(':adresse', $adresse, PDO::PARAM_STR);
    // $enregistrement->bindParam(':sexe', $sexe, PDO::PARAM_STR);
    // $enregistrement->bindParam(':date_naissance', $date_naissance, PDO::PARAM_STR);
    // $enregistrement->bindParam(':description', $description, PDO::PARAM_STR);
    // $enregistrement->execute();

}

?>

  
<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <title>annuaire</title>
  </head>
  <body>
    <h1 class="text-white bg-dark p-3 text-center"><i class="far fa-comments"></i>annuaire <i class="far fa-comments"></i></h1>
    <div class="container border bg-white">
    
     
            
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Liste </h1>
        <table class="table">
            <thead>
<?php
                               
 $resultat = $pdo->query("SELECT * FROM annuaire");
echo '<style>th, td { padding: 10px; }</style>'; // du style css pour le tableau

echo '<table border="1" style="width: 100%; border-collapse: collapse;">';

echo '<tr style="background-color: #333; color: white;">';
    echo'<tr>';
                     echo'<th>id_annuaire</th>';
                    echo'<th>nom</th>';
                    echo '<th>Prenom</th>';
                    echo'<th>telephone</th>';
                    echo'<th>profession</th>';
                    echo'<th>ville</th>';
                    echo'<th>cp</th>';
                    echo'<th>adresse</th>';
                    echo'<th>sexe</th>';
                    echo'<th>date_naissance</th>';
                    echo'<th>Description</th>';
    echo'</tr>';

while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
    echo '<tr>';
    echo '<td>' . $ligne['id_annuaire'] . '</td>';
    echo '<td>' . $ligne['nom'] . '</td>';
    echo '<td>' . $ligne['prenom'] . '</td>';
    echo '<td>' . $ligne['telephone'] . '</td>';
    echo '<td>' . $ligne['profession'] . '</td>';
    echo '<td>' . $ligne['ville'] . '</td>';
    echo '<td>' . $ligne['cp'] . '</td>';
    echo '<td>' . $ligne['adresse'] . '</td>';
    echo '<td>' . $ligne['sexe'] . '</td>';
    echo '<td>' . $ligne['date_naissance'] . '</td>';
    echo '<td>' . $ligne['description'] . '</td>';
    echo '</tr>';
}

echo '</table>';
         
        ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
