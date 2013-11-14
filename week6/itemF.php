<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ItemF</title>
    </head>
    <body>
        <?php
        // put your code here
        
        
        /*
         * From all your notes and assignments from previous weeks, you should
         * be able to create an address book form that can be submited to this page
         * and with the data collected should be able to save to the database.
         * 
         * 1. Start by creating the form and making sure you can collect the data from
         * the $_POST super global.
         * 
         * 2. Validate the data so at least something is being entered correctly.
         * 
         * 3. Take the validated data and insert into the database with bindparam 
         * before excuting
         */
        
        if(isset($_POST["address"],$_POST["city"],$_POST["state"],$_POST["zip"],$_POST["name"] ))
                {
            $db = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root","");
                
          if ( null != $db ) {
         $stmt = $db->prepare('insert into addressbook set address = :AddressValue, '
                    . 'city = :CityValue, state = :StateValue, zip = :ZipValue, name = :NameValue');
            $stmt->bindParam(':AddressValue', $_POST["address"], PDO::PARAM_STR);
            $stmt->bindParam(':CityValue', $_POST["city"], PDO::PARAM_STR);
            $stmt->bindParam(':StateValue', $_POST["state"], PDO::PARAM_STR);
            $stmt->bindParam(':ZipValue', $_POST["zip"], PDO::PARAM_STR);
            $stmt->bindParam(':NameValue', $_POST["name"], PDO::PARAM_STR);
            if ( $stmt->execute() ){
                echo '<p>data submited</p>';
            }
          }
        }
        
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        
        ?>
        
        
        
        <form method="post" action="#">
            <label>Address</label><input type="text" name="address" value=""/><br/>
            <label>City</label><input type="text" name="city" value=""/><br/>
            <label>State</label><input type="text" name="state" value=""/><br/>
            <label>Zip</label><input type="text" name="zip" value=""/><br/>
            <label>Name</label><input type="text" name="name" value=""/>
            
            <input type="submit" value="submit" />
        </form>
        
    </body>
</html>
