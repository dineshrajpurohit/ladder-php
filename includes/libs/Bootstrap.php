<?php
/**
 * This file impements the routing for this application
 *
 * @author rajpurohit
 */
class Bootstrap {
    
    private $url;
    
    /**
     * for further use
     */
    public function __construct() {}
    
    public function run(){
        $this->url = isset($_GET["url"]) ? $_GET["url"] : NULL;
        $this->url = rtrim($this->url, "/");
        $this->url = explode("/", $this->url);
        
        /**
         * if no navigation based url is submitted we want the user to be send to main class
         */
        if(empty ($this->url[0])){
            require_once(CLASS_PATH . "Main.class.php");
            $main = new Main();
            $main->run();
            return false;
        }
        
        /**
         * if the return url has only one argument than we have to send it to default main class
         */
        if(count($this->url) < 2 && $this->url[0] != "player" && $this->url[0] != "main") array_unshift($this->url, "main");
        /**
         * we want to make sure the class file exists when called
         * if it does send it to the specific class
         * else send them to error page
         */
        $classFile = CLASS_PATH . $this->url[0] . ".class.php";
        if(file_exists($classFile)){
            require_once($classFile);
            $class = new $this->url[0]();
            unset($this->url[0]);
            $class->run(array_values($this->url));
            return false;
        }else{
            require(CLASS_PATH . "Error.class.php");      
            Error::display404($this->url);
            return false;
        }
    }
}

?>
