<?php
/**
 * This class will display all the pages related to player 
 *
 * @author rajpurohit
 * Currently this class extends Main class for the time being
 * 
 */
class Player extends Main{

    /**
     * if the user is not logged in we dont want him here
     */
    public function __construct() {
        parent::__construct();
        if(!Authorization::checkUserLoggedIn()){
            header("Location:" .URL. "/index");
        }        
    }
    
    /**
     *
     * @param type $url 
     * 
     * this function is similar to the one in the main class
     * need to figure out a way so that we dont have these redundant functions
     */
    public function run($url = NULL){  
        $this->url = $url;
        /**
         * if the url is not submitted we want to send the user to index page
         */
        if (empty($this->url) || $this->url == NULL){
            $this->profile();
            exit();
        }

        /**
         * if the url has more than required arguments we need to send to 404 error page
         * we can modify this when we have more variables we want to check
         */
        if (count($this->url) > 1)
            Error::display404($this->url);

        /**
         * once we get the url we want to send the user to the specific method
         */
        if (method_exists($this, $this->url[0])) {
            $this->{$this->url[0]}();
        } else {
            Error::display404($this->url);
        }
    }
    
    public function logout(){
        Session::destroySession();
        header("Location: ../index");
    }
    
    /**
     * Player homepage
     */
    public function profile(){
        $session = Session::getSession("username");
        $layout = array(
           "bodyPage"   => "profile",
           "title"      => "Player home page",
           "session"    => $session
       );  
       
       Layout::layout($layout);
    }
    
    /**
     * ranking
     */
    public function rankings(){
        parent::rankings();
    }
    
    /**
     * 
     */
}

?>
