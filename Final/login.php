<?php include 'dependency.php'; ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link href="css/login.css" type="text/css" rel="stylesheet" media="all" />
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        // using Login class and the function processLogin
        Login::processLogin();
        ?>
    <fieldset> 
       
        <legend>Login</legend>
      
        <form name="mainform" action="#" method="post">
            <label>Email:</label> <input type="text" name="email" /><br />
            <label>Password:</label> <input type="password" name="password" /><br />

            <input type="submit" value="Submit" />
             <p> Not a member, <a href="signup.php">Signup</a></p>
        </form>
    </fieldset>
    </body>
</html>
