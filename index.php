<?php

// Allow the config
define('__CONFIG__', true);

// Require the Config
require_once "inc/config.php"

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
        <link rel="stylesheet" href="css/loginCss.css">
    </head>
    <body>
    <div>
        <?php
        echo "Hi, you logged in! It is: ";
        echo date("d M, Y");
        ?>
        <p>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </p>
    </div>
    <?php require_once "inc/footer.php";?>
    </body>
</html>


