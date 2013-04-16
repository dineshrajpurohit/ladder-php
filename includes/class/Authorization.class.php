<?php

/**
 * this class will implement all the methods used for authorization
 * Login - register etc
 *
 * @author rajpurohit
 */
class Authorization {

    private $email;
    private $password;

    public function __construct() {
        
    }

    /**
     * @param - login array which will consits email and password
     * 
     */
    public function checkCredentials($login) {
        $this->email = $login["email"];
        $this->password = $login["password"];
        $db = Database::getInstance();
        $db->connect();
        $data = array("id", "fname", "lname", "email", "password");
        $where = "WHERE email = '{$this->email}' AND password= '{$this->password}'";
        $results = $db->select("users", $data, $where);
        $db->closeConnection();
        /**
         * Since we are only expecting one result we will check if the username exists or display the error message
         * if the username exists we want the user's email to be added to session along with the id (not the password)
         * return true so that our Main class can redirect to player class
         */
        if (count($results) == 1) {
            Session::setSession("username", $this->email);
            Session::setSession("userid", $results[0]["id"]);
            Session::setSession("logged_in", true);
            return true;
        } else {
            return false;
        }
    }

    /**
     * Check if the current session is active
     * we also want to see if the username associated with this session exists
     */
    public static function checkUserLoggedIn() {
        if (Session::getSession("logged_in")) {
            $username = Session::getSession("username");
            $db = Database::getInstance();
            $db->connect();
            $data = array("email");
            $where = "WHERE email = '{$username}'";
            $results = $db->select("users", $data, $where);
            $db->closeConnection();
            if(count($results)==1){
                return true;
            }
        }
        return FALSE;
    }

}

?>
