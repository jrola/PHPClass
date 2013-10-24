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
        $dbh = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root","");
        $stmt = $dbh->prepare('SELECT * FROM week3');
        $stmt->execute();
        
        $result = $stmt->fetchAll();
        
        if(count($result)){
            foreach($result as $row){
                print_r($row);
                echo "<br />";
            }
        } else{
            echo "No rows returned";
        }
        
       ?>
        
        
        
        <form name="mainform" method="post" action="processForm.php">
            Full name: <input type="text" name="fullname" value="" /><br />
            Email: <input type="text" name="email" value="" /><br />
            Comments: <br /><textarea cols="20" rows="5" name="comments"></textarea> <br />
            
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
