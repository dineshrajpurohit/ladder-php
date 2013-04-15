<?php
/**
 * abstract Session class to be used for setting and getting the session
 *
 * @author rajpurohit
 */
abstract class Session {
    
    /**
     * Function should be called to start session
     * This will be called when the index page loads
     */
    public static function startSession(){
        session_start();
    }

    /*
     *  Function called when we want to set a new session
     */
    public static function setSession($key, $value){
        $_SESSION[$key] = $value;
    }
    
    /*
     * Function called when we want the the session information
     * return value when the session exists
     */
    public static function getSession($key){
        if(isset ($_SESSION[$key])){
            return $_SESSION[$key];
        }
    }
    
    /*
     * Function which will remove the session variable
     */
    public static function removeSession($key){
        if(isset($_SESSION[$key])){
            $_SESSION[$key] = NULL;
        }
    }
    
    /*
     *  destroy the session
     *  this will never be called cause we want the session open always
     */
    public static function destroySession(){
        session_destroy();
    }
    
}

?>
