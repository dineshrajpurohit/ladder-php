<?php 
/**
 * Always start the session before everything * 
 */
require 'includes/config/Constants.php';

/**
 * Autoloading all the important libraries and classes
 * we are loading all of them since these are required all the time for the application ro run
 */

// have to trace why encryption library does not load.. forcing it for the time being
//require(LIBRARY_PATH . "Encryption.php");
function __autoload($class){
    $libPath = LIBRARY_PATH . "{$class}.php";
    $classPath = CLASS_PATH . "{$class}.class.php";
    if(file_exists($libPath)){
        require_once($libPath);
    }else{
        require_once($classPath);
    }
    
}
/**
 * After including all the files we want to start the session
 */
Session::startSession();

/**
 * routing the application based on the url 
 */
$bootstrap = new Bootstrap();
$bootstrap->run();
?>