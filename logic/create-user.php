<?php

require('../config/connexion.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];

    // Préparer la requête INSERT
    $query = $db->prepare('INSERT INTO users (email, password, first_name, last_name) VALUES (:email, :password, :first_name, :last_name)');

    // Associer les paramètres avec les valeurs
    $parameters = [
        'email' => $email,
        'password' => $password,
        'first_name' => $first_name,
        'last_name' => $last_name,
    ];

    // Exécuter la requête
    $query->execute($parameters);
}

header('Location: http://localhost/bre01-php-j5/bre01-php-j5/index.php');
exit();
