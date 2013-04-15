<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$root_path = $_SERVER['DOCUMENT_ROOT'];
$include_path = $root_path . "/ladder/includes/";

//path to include 
define("INCLUDE_PATH", $include_path);
//Path to smarty templates
define("SMARTY", "{$include_path}Smarty/libs/");
//Path to form folder
define("FORMS", "{$root_path}/ladder/forms/");

/**
 * Path to public folder
 * this path is used to obtain the css, javascript and the images files
 */
define("PUBLIC_PATH", "{$root_path}/ladder/public/");

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
