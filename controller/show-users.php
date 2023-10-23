<?php

include_once '../model/pdo-users.php';
include_once '../controller/session.php';

function getAllUsers(){
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('SELECT * FROM users');

        $statement->execute();

        $result = $statement->fetchAll();

        return $result;
        
    } catch (\Throwable $th) {
        die("No es pot establir connexió amb la base de dades");
    }
}

require_once "../view/show-users.view.php";
?>