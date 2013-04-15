<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author rajpurohit
 */

// tempororary include the db config file

class Database extends PDO{
    
    // connecting to PDO for db access
    public function __construct($dsn, $username, $passwd, $options) {
        parent::__construct($dsn, $username, $passwd, $options);
    }
    
    // inserting something to table
    public function insert($table, $fields, $values, $where = null){
        
    }
    
    // select something from table
    public function select($table, $fields){
        
    }
    
    // update something from the table
    public function update($table, $field, $value){
        
    }
    
    //delete from the table
    public function delete($table, $field, $value){
        
    }
    
    
}

?>
