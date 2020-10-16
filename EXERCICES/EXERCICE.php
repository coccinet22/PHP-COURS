<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo '<h3>Exercice 3.2: Afficher des nombres allant de 1 à 100</h3>';


for($i=0; $i<10; $i++){
    echo $i . '-';
}
echo '<hr><hr>';

echo '<h3>Exercice 3.2: Afficher des nombres allant de 1 à 100 avec le chiffre 50 en rouge.</h3>';
for($i=0; $i<100; $i++){
    if($i==50){
        echo '<span style="color:red";>'; 
        echo  $i . '-';
          echo '</span>';
    }else{
    echo $i . '-';
}
}
echo '<h3>Exercice 3.3 :Afficher des nombres allant de 2000 à 1930 </h3>';

   for($i = 2000; $i >= 1930; $i--) {
       echo $i . '-' ;
   }


echo '<h3>Exercice 3.4 : Afficher le titre suivant 10 fois : <h4>Titre à afficher 10 fois</h4></h3>';
$maVariable = '<h4>Titre à afficher 10 fois</h4>';
 
for($i=0; $i<10; $i++){
    echo $maVariable;
}
echo '<hr><hr>';
echo '<h3>Exercice 3.5 : Afficher le titre suivant </h3>Remplacer le N avec la valeur de $i (tour de boucle).</h4>';

for($i=1; $i<10; $i++){
    echo 'ceci est la ligne N°' .$i .'<br>';
}

?>


</body>
</html>