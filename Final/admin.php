<?php include 'dependency.php'; ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/admin.css" type="text/css" rel="stylesheet" media="all" />
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        Login::confirmAccess();
        
        
        
        
   $db = new PDO(Config::DB_DNS ,Config::DB_USER,Config::DB_PASSWORD);

$title = ( isset($_POST["title"]) ? $_POST["title"] : "" );
//$email = ( isset($_POST["email"]) ? $_POST["email"] : "" );


            
    $statement = $db->prepare('select user_id from users WHERE email = :emailValue');
    $statement->bindParam(':emailValue', $_POST["email"], PDO::PARAM_STR);
  $idResult = $statement->fetch(PDO::FETCH_ASSOC);
         
            $statement->execute();
            echo "<p>".$idResult."</p>";
            
            $statement2 = $db->prepare('update page set title = :titleValue WHERE user_id = :idValue');
            $statement2->bindParam(':idValue', $idResult, PDO::PARAM_STR);
            $statement2->bindParam(':titleValue', $title, PDO::PARAM_STR);

            $statement2->execute(); 
         ?>
    <fieldset>
        
        <legend> Edit Page</legend>
                
        <input type="viewpage" value="View Page" />
        
         <form name="mainform" action="#" method="post">
            
            <label> Title:</label> <input type="text" name="title" value="title" /><br />            
            <label> Theme:</label> <select name="theme">
                <option value="theme1" selected="selected">Red</option>
                <option value="theme2" >Yellow</option>
                <option value="theme3" >Green</option>
                 </select>
            <br />
            
            <label> Address:</label> <input type="text" name="address" value="address" /><br /> 
            <label> Phone:</label> <input type="text" name="phone" value="phone" /><br /> 
           
            <label> About:</label><br />
            <textarea name="about" cols="50" rows="10">about</textarea><br /> 
            
            <input type="submit" value="Submit" />
            <a href="login.php"><input type="logout" value="Logout" /></a>
        </form>
    </fieldset>
    </body>
</html>
