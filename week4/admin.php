<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();        
        session_regenerate_id(true);
        
        if ( empty($_SESSION["isLoggedIn"]) ) {
            header("Location:login.php");
        }
        /*
         * Have user logout
         * use $_GET super global
         * distroy the session and send to login page
         */
        ?>
        
        <h1>You made it</h1>
        
  
        <button><a href="admin.php?logout=1">Logout</a></button>
    </body>
</html>
