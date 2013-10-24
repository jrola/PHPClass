<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


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