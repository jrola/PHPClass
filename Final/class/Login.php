<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Jack
 */
class Login {
    //put your code here
    /*function thatll process login page checking is password matches one on database*/
public static function processLogin(){
        $_SESSION["allowAccess"] = false;
        if (isset($_POST["password"]) && $_POST["password"] == $_POST["password"]){
         $_SESSION["allowAccess"] = true;
         $_session["email"] = $_POST["email"];
         header("Location:admin.php");
        }
}
    /*function that confirms youre login process if
     *  not confirmed you stay on the login page*/
public static function confirmAccess(){
        if ( ! isset($_SESSION["allowAccess"]) 
                || $_SESSION["allowAccess"] != true){
            header("Location:login.php");
        }
    }
}
?>
