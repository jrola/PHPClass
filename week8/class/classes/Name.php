<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Name
 *
 * @author GFORTI
 */
class Name extends DB {
    //put your code here
    
    
    //todo: getname(id), getAllNames, updateName(id), deleteName(id), addName(id)
    
    public function createName() {
        
        return $db->lastInsertId();
    }
    
    
}
