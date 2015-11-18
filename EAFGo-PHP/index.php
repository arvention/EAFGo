<?php
    session_start();
    
    if(!empty($_SESSION['userDetails'])){
        header('Location: SampleHomePage.php');
    }
    if(empty($_SESSION['loginTrials'])){
        $_SESSION["loginTrials"] = 0;
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>EAF Go | De La Salle University</title>
        
        <link rel="shortcut icon" href="img/dlsu_logo.png" />
        <link rel="stylesheet" type="text/css" 	media="all" href="css/login.css" />
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.color.js"></script>
        <script type="text/javascript" src ="js/login.js"></script>
    </head>
    <body>
        <div id = "overallDiv">
            <div id ="loginDiv">
                <div id="loginLogo" class = "loginBoxCenter">
                    <img src = "img/dlsu_logo.png" height="100px" width="100px"/>
                </div>
                
                <h1 id = "eafLabel" class = "loginBoxCenter">eaf<div id="goLabel">go</div></h1>
                <form id = "loginForm" class = "loginBoxCenter" action = "php/loginValidation.php" method = "post">
                    <input type="text" name ="id" placeholder = "ID" id = "idField" class = "loginFields" required/>
                    <input type="password" name = "password" placeholder = "Password" id = "passwordField" class = "loginFields" required/>
                    <input type ="submit" id = "loginButton" class = "clickableButton" value="Let's start!"/>
                </form>
                <?php
                    if($_SESSION['loginTrials'] > 0){
                ?>
                <div class = "loginBoxCenter" id="errorDiv">Invalid ID and/or Password.</div>
                <?php
                    }
                    $_SESSION['loginTrials'] = 0;
                ?>
            </div>
        </div>
    </body>
</html>
