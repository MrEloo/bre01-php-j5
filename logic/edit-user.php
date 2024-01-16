<?php

/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

var_dump($_POST['userId']);

require('../config/connexion.php');




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userID = intval($_POST['userId']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];


    $query = $db->prepare('UPDATE users SET email = :email, password = :password, first_name = :first_name, last_name = :last_name WHERE id = :id');

    var_dump($userID);
    $parameters = [
        'id' => $userID,
        'email' => $email,
        'password' => $password,
        'first_name' => $first_name,
        'last_name' => $last_name,
    ];

    $query->execute($parameters);
}

header('Location: http://localhost/bre01-php-j5/bre01-php-j5/index.php');
exit();
