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
        
        //$_POST
        //echo $_POST["fullname"];
        
        print_r($_POST);
        
            $fullname = "";
            $email = "";
            $comments = "";
        
        if(count($_POST))
            {
                if ( !array_key_exists("fullname", $_POST) ) 
                {
                   $fullname = $_POST["fullname"];                   
              
                }
                if ( !array_key_exists("email", $_POST) ) 
                {
                   $fullname = $_POST["email"];                   
              
                }
                if ( !array_key_exists("comments", $_POST) ) 
                {
                   $fullname = $_POST["comments"];                   
              
                }
            }
        
        ?>
        
        <form name="mainform" method="post" action="index.php">
            Full name: <input type="text" name="fullname" value="<?php echo $fullname?>" /><br />
            Email: <input type="text" name="email" value="<?php echo $email?>" /><br />
            Comments: <br /><textarea cols="20" rows="5" name="comments"><?php echo $comments?></textarea> <br />
            
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
