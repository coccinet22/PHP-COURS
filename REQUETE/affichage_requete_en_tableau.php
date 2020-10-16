<?php

//dans ce fichier nous allons mettre en place un script permettant d'afficher n'importe quelle requete sous forme de tableau

$host = 'mysql:host=localhost;dbname=entreprise';
$login = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
$pdo = new PDO($host, $login, $password, $options);

$resultat=$pdo->query("SELECT *FROM employes");
echo '<table border="1" style="border-collapse :collapse; width:100%;">';
//on commece par afficher la lign des colonnes
echo '<tr>';
//$resultat->columCount() :le nombre de colonnes contenues dans la reponse
for($i=0;$i<$resultat->columnCount(); $i++){
    $colonne=$resultat->getColumnMeta($i);
    // echo '<pre>';
    // print_r($colonne);
    // echo '</pre>';
    echo'<th style="padding:10px;">' .$colonne['name'] .'</th>';

}
echo '</tr>';
//nous pouvons maintenant afficher les données tableau
//comme les colonnes sont dans l'ordre de la reponse sql, les données aussi on nous pouvons utiliser un foreach
while($ligne=$resultat->fetch(PDO::FETCH_ASSOC)){
    echo '<tr>'; 
    foreach($ligne AS $valeur){
        echo'<td style="padding:10px;">' .$valeur .'<td>';
    }
    echo '</tr>'; 
}
echo '</table>';





?>