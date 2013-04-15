<?php

/**
 * This is the main class. This is called when the page is opened for the first time
 * If the user is not logged in this will display the Main page
 * if the user is loggedin and is in session we want to redirect user to Player class
 *
 * @author Dinesh
 */
class Main {

    private $url;

    /*
     * Nothing to initialize yet
     */
    public function __construct() {}

  
    /*
     * Check for the user session and redirect the user to a specific page
     * if the user has already logged in call the Player class
     * if the user is not logged in use this clas for navigation
     */
    public function run($url = null) {
        $this->url = $url;
        /**
         * if the url is not submitted we want to send the user to index page
         */
        if($this->url == NULL) $this->index ();
        
        /**
         * if the url has more than required arguments we need to send to 404 error page
         * we can modify this when we have more variables we want to check
         */
        if(count($this->url) > 1) Error::display404($this->url);
        
        /**
         * once we get the url we want to send the user to the specific method
         */
        if(method_exists($this, $this->url[0])){
            $this->{$this->url[0]}();
        }else{
            Error::display404($this->url);
        }
        
        
    }
    
    /*
     * Function which checked for the user session and return true if the user is logged in false otherwise
     */
    public function loggedIn() {
        if (Session::getSession("logged_in") == true) {
            return TRUE;
            //Session::destroySession();
        } else {
            return false;
          ///  Session::setSession("loggen_in", true);
        }
    }

    public function index() {
        $session =  Session::getSession("logged_in");
        /*
         * Index page will diplay the latest event in the ladder tournament
         * User will get the option
         */
        $layout = array(
            "bodyPage" => "index",
            "title" => "Ladder main page",
            "session" => $session
        );

        Layout::layout($layout);
    }

    // check for user session
    public function login() {
        /**
         * we want to pass an array to Layout class so that these values can be displayed on the template
         *  Array should have atleast one variable named bodyPage or it will alwayd display the index layout
         */
        $layout = array(
            "bodyPage" => "login",
            "title" => "Login Page"
        );

        Layout::layout($layout);
    }

    public function rules() {
        $layout = array(
            "bodyPage" => "rules",
            "title" => "Rules Page"
        );

        Layout::layout($layout);
    }

}

?>
