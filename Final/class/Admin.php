<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Jack
 */
class Admin extends DB{
    //put your code here
    
public function getPageData(){
        $result = array();
        $db= $this->getDB();
    if(NULL != $db){
         $stmt = $db->prepare('select title, theme, address, phone, email, about from page');
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    }
    return $result;
}

 public function titleEntryIsValid(){
        if(array_key_exists("title", $_POST)){
                if(! Validator::websiteIsValid($_POST["title"])){
                    $this->errors["title"] = "title is not valid.";  
                }
            }else{
                $this->errors["title"] = "title is required";
            }
            return(!empty($this->errors["title"]) ? true : FALSE);
}
public function addressEntryIsValid(){
         if(array_key_exists("address", $_POST)){
                if(! Validator::emailIsValid($_POST["address"])){
                    $this->errors["address"] = "address is not valid.";  
                }
            }else{
                $this->errors["address"] = "address is required";
            }
            return(!empty($this->errors["address"]) ? true : FALSE);
}
public function phoneEntryIsValid(){
        if(array_key_exists("phone", $_POST)){
                if(! Validator::passwordIsValid($_POST["phone"])){
                    $this->errors["phone"] = "phone is not valid.";  
                }
            }else{
                $this->errors["phone"] = "phone is required";
            }
            return(!empty($this->errors["phone"]) ? true : FALSE);
}
public function emailEntryIsValid(){
         if(array_key_exists("email", $_POST)){
                if(! Validator::emailIsValid($_POST["email"])){
                    $this->errors["email"] = "Email is not valid.";  
                }
            }else{
                $this->errors["email"] = "Email is required";
            }
            return(!empty($this->errors["email"]) ? true : FALSE);
}
public function aboutEntryIsValid(){
         if(array_key_exists("about", $_POST)){
                if(! Validator::emailIsValid($_POST["about"])){
                    $this->errors["about"] = "About is not valid.";  
                }
            }else{
                $this->errors["about"] = "About is required";
            }
            return(!empty($this->errors["about"]) ? true : FALSE);
}
public function processSignup(){
        $db= $this->getDB();
        if(NULL != $db){
            $statement = $db->prepare('insert into page set title = :titleValue, '
           . 'theme = :themeValue, address = :addressValue, phone = :phoneValue, 
             email = :emailValue, about = :aboutValue');
            $statement->bindParam(':titleValue', $_POST["title"], PDO::PARAM_STR);
            $statement->bindParam(':themeValue', $_POST["theme"], PDO::PARAM_STR);
            $statement->bindParam(':addressValue', $_POST["address"], PDO::PARAM_STR);
             $statement->bindParam(':phoneValue', $_POST["phone"], PDO::PARAM_STR);
            $statement->bindParam(':emailValue', $_POST["email"], PDO::PARAM_STR);
            $statement->bindParam(':aboutValue', $_POST["about"], PDO::PARAM_STR);
        if($statement->execute()){
            header("Location:index.php");
        }   
      return (count($this->errors)? false : true);
      }   
   }
}
?>
