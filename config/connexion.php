<?php
$host = "127.0.0.1"; // Adresse IP de votre serveur local
$port = "3306";
$dbname = "eloancoindin_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "root"; // Nom d'utilisateur de votre base de données locale
$password = ""; // Mot de passe de votre base de données locale (laissez vide si vous n'avez pas défini de mot de passe)


$db = new PDO(
    $connexionString,
    $user,
    $password,
);
