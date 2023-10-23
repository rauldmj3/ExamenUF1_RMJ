<?php

include_once '../model/pdo-users.php';
include_once '../controller/session.php';

session_start();
$user =  getSessionUserId();

if(isset($_POST["confirm"])){
    $confirm = $_POST["confirm"];
}else $confirm="";

if(strcmp($confirm,"CONFIRMAR")==0){

    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('DELETE FROM users WHERE id = :id');

        $statement->bindParam(':id', $user);

        $statement->execute();
        $statement->debugDumpParams();
        $result = $statement->fetch(PDO::FETCH_ASSOC);  
        
        
        
    } catch (PDOException $e) {
     
        die("No es pot establir connexió amb la base de dades");
    }finally {
        header("Location:../controller/index.php");
    }
    
}

require_once "../view/delete-user.view.php";

?>