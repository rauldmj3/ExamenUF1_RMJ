<?php

include_once '../model/pdo-users.php';
include_once '../controller/session.php';

    $userId = getSessionUserId();
    
    $anonUser = $userId == 0;

    $userRol = getAdminUser($userId); //EXERCICI 5

    $adminUser = $userRol == 0;  //EXERCICI 5
    $changePasswordVisibility = '';
    if (!$anonUser) {        
        $nickname = getUserNicknameById($userId);
    } else $changePasswordVisibility = '';
    
    $file = pathinfo($_SERVER['PHP_SELF'])['filename'];
    
    $homeActive = $file == "index" ? "active" : "";
    $loginActive = $file== "login" ? "active" : "";
    $signupActive = $file == "sign-up" ? "active" : "";
    $createActive = $file == "edit" ? "active" : "";
    $passwordActive = $file == "change-password" ? "active" : "";    


    require_once '../view/navbar.view.php';
?>