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
        
        //var_dump($result);
        
        if(count($result) ){
            echo "<table border='1'>";
            foreach($result as $row){
             echo "<tr><td>", $row["Fullname"], "</td><td>", $row["Email"], "</td><td>", $row["Comments"], "</td></tr>";
            } 
                echo "</table>";
            
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
