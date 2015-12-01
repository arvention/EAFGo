<?php

    include('database.php');
    session_start();

    $database = new database;
    $database->_construct();
    
    $id = filter_input(INPUT_POST, 'id');
    $password = filter_input(INPUT_POST, 'password');
    
    $userDetails = $database->checkLogin($id, $password);
    
    if($userDetails != false){
        $_SESSION["userDetails"] = $userDetails;
        unset($_SESSION['loginTrials']);
        header("Location: ../StudentHomePage.php");
    }
    else{
        $_SESSION["loginTrials"] = 1;
        header("Location: ../index.php");
    }