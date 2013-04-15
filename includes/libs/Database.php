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

 class Database{
     
     private static $instance;
     private $connection;

     /**
     * Make it private so it cannot be accessed 
     */
    private function __construct() {}
    
    /**
     * Singleton function to get a single instance of the Database class
     */
    static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Function used to connect the database
     */
    public function connect(){
        require_once(CONFIG_PATH . "database.config");
        try{
            $this->connection = new PDO("{$db_type}:dbname={$db_name};host={$db_host}", $db_username, $db_password);  
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $p){
            Error::PDOError($p->getCode(), $p->getMessage());
        }
            
    }


    // inserting something to table
    public function insert($table, $fields, $values, $where = null){
        
    }
    
    /**
     *
     * @param type $table - Table we want to send query to
     * @param type $fields - 
     * @param type $where - where clause to get certain result
     *  select something from table
     */
    public function select($table, $fields, $where = ""){
        try{
            $fields = implode(",", $fields);
            $stmt = $this->connection->prepare("SELECT {$fields} from {$table} {$where}");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $p){
            Error::PDOError($p->getCode(), $p->getMessage());
        }
    }
    
    // update something from the table
    public function update($table, $field, $value){
        
    }
    
    //delete from the table
    public function delete($table, $field, $value){
        
    }
    
    /**
     * Closing the database connection
     */
    public function closeConnection(){
        $this->connection = null;
    }
    
    
}

?>
