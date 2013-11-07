<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Guestbook</title>
    </head>
    <body>
        <?php
        // put your code here        
        Login::confirmAccess();
        
        
        $gb = new Guestbook();
        $gb->entryIsValid();
        $gb->displayGuestbook();
        
       
        
        ?>
        
        <h1> Guest Book </h1>
        <form name="mainform" method="post" action="#">            
            <label>Name</label> <input type="text" name="name" value="" /> <br />
            <label>Email</label> <input type="text" name="email" value="" /> <br />
            <label>Comments</label> <textarea name="comments"></textarea>
            <br />
            <input type="submit" value="Submit" />
        </form>
       
    </body>
</html>
