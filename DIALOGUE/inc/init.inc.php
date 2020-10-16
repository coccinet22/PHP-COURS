<?php 
// Connexion à la BDD
$host = 'mysql:host=localhost;dbname=dialogue';
$login = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
$pdo = new PDO($host, $login, $password, $options);


//variable destinée à afficher des messages utilisateurs
$msg='';

//ouverture de la session 
session_start();