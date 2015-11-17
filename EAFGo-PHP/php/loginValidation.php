<?php

    include('database.php');
    session_start();

    $database = new database;

    $id = filter_input(INPUT_POST, 'id');
    $password = filter_input(INPUT_POST, 'password');
    
    $database->_construct();
    $userDetails = $database->checkLogin($id, $password);
    
    if(!is_null($userDetails)){
        $_SESSION["userDetails"] = $userDetails;
        header("Location: ../newEmptyPHPWebPage.php");
    }
    else{
        header("Location: ../index.php");
    }

    