<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validator
 *
 * @author Jack
 */
class Validator {
    //put your code here
    
    public static function websiteIsValid( $str ) {
       if ( is_string($str) && !empty($str) && preg_match("/[A-Za-z0-9_]{2,}+@[A-Za-z0-9_]{2,}+\.[A-Za-z0-9_]{2,}/",$str) != 0 ) {
           return true;
       }        
       return false; 
    }
    
    public static function emailIsValid( $str ) {
       if ( is_string($str) && !empty($str) && preg_match("/[A-Za-z0-9_]{2,}+@[A-Za-z0-9_]{2,}+\.[A-Za-z0-9_]{2,}/",$str) != 0 ) {
           return true;
       }        
       return false; 
    }
    
    public static function passwordIsValid( $str ) {
       if ( is_string($str) && !empty($str) ) {
           return true;
       }        
       return false; 
    }
    
     
    /*function checking if the email and password on the database
     * is accurate 
     */
    public static function loginIsValid( $email, $password ) {
        $password = sha1($password);
         $db = new PDO(Config::DB_DNS ,Config::DB_USER,Config::DB_PASSWORD);
        
        $stmt = $db->prepare('select * from users where email = :emailValue limit 1');
        $stmt->bindParam(':emailValue', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        if ( count($result) ) {
            
            if ( $result[0]["password"] == $password )
                return true;
        }
        
        return false; 
    }
}