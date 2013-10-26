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
        // put your code here
        
        
/*------------------ Create three string variables -------------------*/        
       
        $firstname = 'Jack';
        $lastname = 'Rola';
        $fullname = $firstname . " " . $lastname;
        echo $fullname;
    
/*------------------ create three array variables -------------------/           
                     Array one with just 5 values
                     Array two with five key=>value pairs
                     Array three with 3 multidimensional values */

      
        $arr = array("one","two","three, four, five") ; /* regular array declaration */
        $arr = array("0" => "one","1" => "two","2" => "three","3" => "four", "4" => "five");
        $array = array("fname" => "Jack",
                       "lname" => "Rola",
                       "email" => "sample@email.com",
                       "phone" => "401-123-1234",
                       "adress" => "123 hello st"
                       );
              
        
            foreach( $array as $key => $value ){
                echo $key."\t=>\t".$value."\n";
            }
            print_r($array); /* prints array content */
            var_dump(fullname); /* prints content of variable */ 
            $arraymulti = array(
                          array("one1","two1","three1"),
                          array("one2","two2","three2"),
                          array("one3","two3","three3")
                               );

 /*------------------  string functions   -------------------*/    
 /*------------------ Explode -------------------*/    
			
            $nameArray = explode(" ", $fullname);
            echo $nameArray[0] . " - " . $nameArray[1];
 
 /*------------------ sha1 -------------------*/             
        
            $me = 'Jack';
            echo sha1($me);
            if (sha1($me) === 'bc5351ffae3efe8067951f5deba4b294bf863f86')
            {
            echo "valid name!";
            }    
            
            
 /*------------------ htmlentities -------------------*/             
            
            $apple = "Leo is da <b>best</b> one";
            echo htmlentities($apple);
            
 /*------------------ md5 -------------------*/              
          
            $me = 'Jack';
            echo md5($me);
            /* md5() creates a hash code for the variable or string it is passed */
            if (md5($me) === '40687c8206d15373954d8b27c6724f62')
            {
            echo "valid name!";
            }

/*------------------ strip_tags -------------------*/         
            
            $computer = '<p>My name is Jack.  I like computers.</p><!-- i made a string -->';
            echo strip_tags($computer);
            echo "\n";
   
/*------------------ trim -------------------*/             
            
            $name = 'Hi my name ';
            var_dump($name);
            $nameCut = trim($name, "The Way of the ");
            echo "$nameCut ";
            var_dump($nameCut);
            
/*------------------ ucwords -------------------*/              
            
            $nameEntry = 'Jack Rola';
            $nameUpper = ucwords($nameEntry);
            echo $nameUpper;
            
/*------------------ strlen -------------------*/              
            
            $words = "Some words";
            echo strlen($words);
            
/*------------------ str_shuffle -------------------*/           
             
            $phrase = "Here is a phrase that will be shuffled.";
            $shuffledPhrase = str_shuffle($phrase);
            echo $shuffledPhrase;
            
/*------------------ ord -------------------*/ 
            
            $str = "lfirjfJmnfdkjJj";
            $strASCII = ord($str);
            echo "The letter 'J' has ASCII code: $strASCII";
            
/*------------------ array functions  -------------------*/   
/*------------------ array_count_values  -------------------*/    
            
            $colorArray = array("red","white","blue", "red", "white");
            print_r(array_count_values($colorArray));
            
/*------------------ array_flip  -------------------*/             
            
             $colorArray = array("red","white","blue", "red", "white");
             print_r(array_flip($colorArray));
          
/*------------------ array_key_exists  -------------------*/   
             
             $search_array = array('first' => 1, 'second' => 2, 'third' => 3, 'four' => 4);
             if (array_key_exists('first', $search_array)) {
             echo "The 'first' element is in the array";
            }
            
/*------------------ array_map  -------------------*/          
            
            function cube($n)
            {
                return($n * $n * $n);
            }
            $a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
            $b = array_map("cube", $a);
            print_r($b);
            
/*------------------ array_rand  -------------------*/ 
            
            $input = array("red", "blue", "green", "black", "yellow");
            $rand_keys = array_rand($input, 2);
            echo $input[$rand_keys[0]] . "\n";
            echo $input[$rand_keys[1]] . "\n";  
            
/*------------------ array_push  -------------------*/    
            
            $food = array("orange", "banana");
            array_push($food, "apple", "raspberry");
            print_r($food);
            
/*------------------ in_array  -------------------*/   
            
            $food = array("banana", "orange", "apple", "raspberry");
            if (in_array("apple", $os)) {
                echo "Got apple";
            }
            if (in_array("Banana", $os)) {
                echo "Got banana";
            }
            
/*------------------ shuffle  -------------------*/ 
            
            $numbers = range(1, 20);
            shuffle($numbers);
            foreach ($numbers as $number) {
                echo "$number ";
            }
            
/*------------------ count/sizeof  -------------------*/   
            
              $food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));

            // recursive count
            echo count($food, COUNT_RECURSIVE); // output 8

            // normal count
            echo count($food); // output 2

/*------------------ sort -------------------*/   
            
            $fruits = array("lemon", "orange", "banana", "apple");
            sort($fruits);
            foreach ($fruits as $key => $val) {
              echo "fruits[" . $key . "] = " . $val . "\n";
            }
            
            
        ?>
    </body>
</html>
