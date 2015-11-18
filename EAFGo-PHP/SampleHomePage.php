<?php
    include('php/user.php');
    session_start();
    if(empty($_SESSION["userDetails"])){
        header("Location: index.php");
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $lol = $_SESSION["userDetails"];
        echo "hello " . $lol->getFirstName();
        ?>
        <a href="php/logout.php">Logout</a>
    </body>
</html>
