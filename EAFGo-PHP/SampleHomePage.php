<?php
    include('php/user.php');
    session_start();    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $lol = unserialize($_SESSION["userDetails"]);
        echo "hello " . $lol->getFirstName();
        ?>
    </body>
</html>
