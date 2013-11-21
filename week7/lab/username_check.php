<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



   $username = filter_input(INPUT_POST, "login");
   $msg = "Login name is not valid"; 
   $passed = FALSE;
   
    if(is_string($username) && !empty($username)){
        $passed = true;
        $db = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root","");
        $statement = $db->prepare('select * from login where username = :username');
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        
        if(is_array($result) && count($result)){
            $msg = "login name is taken";
        } else {
             $msg = "login name is available";
        }
}
           $results = array(
               'msg' => $msg,
               'valid' => $passed,
               'login' => $username,
           );
           echo json_encode($results);