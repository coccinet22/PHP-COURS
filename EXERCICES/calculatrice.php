<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>

<h3>Exercice 4 : Pour cet exercice, nous allons créer une calculatrice en PHP</h3>
<!-- Créez une page « calculatrice.php ».</h3>La page calculatrice est un formulaire avec un menu déroulant qui nous permet de choisir le signe de l’opération ->addition, soustraction, multiplication,
division. ';</h3> -->
<?php 
if(isset($_POST["nb1"])&& isset($_POST["nb2"])){
    echo $_POST['nb1'];
    echo $_POST['nb2'];
    } -->
// if(isset($_POST["nb1"]) && isset($_POST["nb2"])){
// switch($_POST["calcul"]){
// case "addition" : echo $resultat=$_POST["nb1"] + $_POST["nb2"];
// break;

// case "soustraction": echo $resultat=$_POST["nb1"] - $_POST["nb2"];
// break;

// case "multiplication": echo $resultat=$_POST["nb1"] * $_POST["nb2"];
// break;

// case "division": echo $resultat=$_POST["nb1"] / $_POST["nb2"];
// break;
// } 
// } 

if (isset($_POST['nb1']) && isset($_POST['choix']) && isset($_POST['nb2'])) 
{
    $nb1 = $_POST['nb1']; 
    echo '<p>Nb1 : ' . $_POST['nb1'] . '</p>';

    $choix = $_POST['choix'];
    echo '<p>Choix : ' . $_POST['choix'] . '</p>';
    $nb2 = $_POST['nb2'];
    echo '<p>Nb2 : ' . $_POST['nb2'] . '</p>';
}
	    // if($nb1 != NULL AND $nb2 != NULL){
		if($choix == 'addition'){
			$resultat = $nb1 + $nb2;
			echo ' résultat est le : '.$resultat; 
		}
	    elseif($choix == 'soustraction'){
			$resultat = $nb1 - $nb2;
			echo 'résultat est le : '.$resultat;
        }
        elseif($choix == 'multiplication'){
			$resultat = $nb1 * $nb2;
			echo ' résultat est le : '.$resultat; 
        }
        else($choix == 'division'){
			$resultat = $nb1 / $nb2;
            echo ' résultat est le : '.$resultat;
        }
//}
    
?>
<form method="POST" action="">
<legend>Calculatrice en ligne</legend>
<br>

<input type="text" name="nb1" value=""> 
<select name="choix">
<option type="text" name="choix" value="addition">+</option>
<option type="text" name="choix" value="soustraction">-</option>
<option type="text" name="choix" value="multiplication">*</option>
<option type="text" name="choix" value="division">/</option>
</select>
<input type="text"name="nb2" value="">
<input type="reset"name="effacer" value="Calculer"/>
</form>

</body>
</html> -->

