<?php

/**
 * 
 * by Dinesh Purohit
 * 
 * Please do not make any changes to this file. 
 * 
 */


/**
 * We want the config file so that the variables can be assigned to constants
 */
require(dirname(__FILE__) . "/config.php");

/**
 * Website default constants
 */
define("LADDER_HEADER", $ladder_header);
define("URL", $host_url);

/**
 * Database constants
 */
define("DB_TYPE", $db_type);
define("DB_HOST", $db_host);
define("DB_NAME", $db_name);
define("DB_USERNAME", $db_username);
define("DB_PASSWORD", $db_password);

/**
 * Security Constants
 */
define("SALT", $salt);

/**
 * Path constants
 */
$root_path =  dirname($_SERVER['SCRIPT_FILENAME']) . "/";
$include_path = $root_path . "/includes/";

//path to include 
define("INCLUDE_PATH", $include_path);
//Path to smarty templates
define("SMARTY", "{$include_path}Smarty/libs/");
//Path to form folder
define("FORMS", "{$root_path}forms/");

/**
 * Path to public folder
 * this path is used to obtain the css, javascript and the images files
 * displaying public path as url -- for the time being
 */
define("PUBLIC_PATH", URL . "public");

/*
 * Location of all the library which are important for our aplication
 */
define("LIBRARY_PATH", $include_path . "libs/");

/* 
 * location of all the class files
 */
define("CLASS_PATH", $include_path . "class/");

/**
 * Location for config files
 */
define("CONFIG_PATH", $include_path . "config/")


?>
