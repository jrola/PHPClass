<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guestbook
 *
 * @author GFORTI
 */
class Guestbook extends DB {
    //put your code here
    
    public function getGuestbookData() {
        $result = array();
        $db = $this->getDB();        
        if ( NULL != $db ) {
            $stmt = $db->prepare('select name, email, comments from guestbook');
            $stmt->execute();            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;        
    }
    
    public function displayGuestbook() {
        
        $results = $this->getGuestbookData();
        
        if ( count($results) ) {
            echo '<table border = "1">';
            foreach($results as $value){
                echo '<tr>';
                echo '<td>', $value['name'], '</td>';
                echo '<td>', $value['email'], '</td>';
                echo '<td>', $value['comments'], '</td>';
                echo '</tr>';
            }
            
             echo '<h2>Comments Posted</h2>';
           
        } else {
            echo '<p>No comments posted</p>';
        }
        
        
    }
    public function entryIsValid(){
        if(isset($_POST["name"]) && isset( $_POST["email"])&& isset( $_POST["comments"])){
        
        if(Validator::commentsIsValid($_POST["comments"]) 
              &&Validator::nameIsValid($_POST["name"]) 
               && Validator::emailIsValid($_POST["email"])){
           $this->processGuestbook();
               }
          
        }
    }

    public function processGuestbook(){
        
       
        $db= $this->getDB();
        
                if ( null != $db ) {
            $stmt = $db->prepare('insert into guestbook set name = :nameValue, '
                    . 'email = :emailValue, comments = :commentsValue');
            $stmt->bindParam(':nameValue', $_POST["name"], PDO::PARAM_STR);
            $stmt->bindParam(':emailValue', $_POST["email"], PDO::PARAM_STR);
            $stmt->bindParam(':commentsValue', $_POST["comments"], PDO::PARAM_STR);
            if ( $stmt->execute() ){
                return true;
            }
        } 
              
            
    }
    
}
