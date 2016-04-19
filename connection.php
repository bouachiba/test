<?php
// Définition des variables de connexion

$pass = 'root';
$dsn = 'mysql:host=localhost;dbname=carnet_adresse';
// Connexion à la base de données
try {
$dbh = new PDO($dsn,$pass,'');
} catch (PDOException $e) {
die( "Erreur ! : " . $e->getMessage() );}
//$dbh = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));