<?php 
/*
 * Always start the session before everything * 
 */
include_once 'includes/config/Constants.php';

/*
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



//$main = new Main();
//$main->run();
$bootstrap = new Bootstrap();
$bootstrap->run();
?>