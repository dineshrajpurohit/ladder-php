<?php 
/**
 * Always start the session before everything * 
 */
require 'includes/config/Constants.php';

/**
 * Autoloading all the important libraries
 */
function __autoload($class){
    require_once(LIBRARY_PATH . "{$class}.php");
}

// we want to be able to navigae user to the appropriate page 
include_once("includes/class/Main.class.php");
include_once("includes/class/Player.class.php");
include_once("includes/class/Error.class.php");
include_once("includes/class/Layout.class.php");


/**
 * routing the application based on the url 
 */
$bootstrap = new Bootstrap();
$bootstrap->run();
?>