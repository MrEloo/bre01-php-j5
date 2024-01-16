<?php

/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

var_dump($_GET['id']);

if (isset($_GET['id'])) {
    $userID = $_GET['id'];
}

require('../config/connexion.php');

if ($_SERVER['REQUEST_METHOD']) {
    $userID = intval($_GET['id']);


    $query = $db->prepare('DELETE FROM users WHERE id = :id');

    $parameters = [
        'id' => $userID,
    ];

    $query->execute($parameters);
}

header('Location: http://localhost/bre01-php-j5/bre01-php-j5/index.php');
exit();
