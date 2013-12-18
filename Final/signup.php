<?php include 'dependency.php'; ?>

<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign Up</title>
        <link href="css/styles.css" type="text/css" rel="stylesheet" media="all" />
    </head>
    <body>
        <?php
        // put your code here
        $sp = new Signupprocess();
        if (! $sp->processSignup() ){
        }
        
        ?>
    <fieldset>    
        <legend>Sign up</legend>
         
        <form name="mainform" action="#" method="post">
            
            <label>Website:</label> <input type="text" name="website" /><br />
            <label>Email:</label> <input type="text" name="email" /><br />
            <label>Password:</label> <input type="password" name="password" /><br />
           
            <input type="submit" value="Submit" />
            <p> Already a member, <a href="login.php">Login</a></p>
        </form>
    </fieldset>
    </body>
</html>
