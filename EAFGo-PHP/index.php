
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
                <form id = "loginForm" class = "loginBoxCenter" action = "Signup" method = "post">
                    <input type="text" name ="id" placeholder = "ID" class = "loginFields" required/>
                    <input type="password" name = "password" placeholder = "Password" id = "passwordField" class = "loginFields" required/>
                    <input type ="submit" id = "loginButton" class = "clickableButton" value="Let's start!"/>
                </form>
            </div>
        </div>
    </body>
</html>
