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

    /**
     * Nothing to initialize yet
     */
    public function __construct() {
        
    }

    /**
     * Check for the user session and redirect the user to a specific page
     * if the user has already logged in call the Player class
     * if the user is not logged in use this clas for navigation
     */
    public function run($url = null) {
        $this->url = $url;
        /**
         * if the url is not submitted we want to send the user to index page
         */
        if ($this->url == NULL) {
            $this->index();
            exit;
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

    /**
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
        $session = Session::getSession("logged_in");
        /*
         * Index page will diplay the latest event in the ladder tournament
         * User will get the option
         * I am just sending session information for now - needs to be modified
         */
        $layout = array(
            "bodyPage" => "index",
            "title" => "Ladder main page",
            "session" => $session,
        );

        Layout::layout($layout);
    }

    // check for user session
    public function login() {
        /**
         * we want to pass an array to Layout class so that these values can be displayed on the template
         *  Array should have atleast one variable named bodyPage or it will alwayd display the index layout
         */
        $error_message = Error::getErrorMessage();
        Error::resetErrorMessage();
        $layout = array(
            "bodyPage" => "login",
            "title" => "Login Page",
            "error_message" => $error_message
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

    /**
     * Display the ranking of the player in ascending order
     * We want to display the rank based on elo of the player
     */
    public function rankings() {
        $db = Database::getInstance();
        $db->connect();
        $table = "users";
        $data = array("fname", "lname", "rank", "elo");
        $where = "ORDER BY rank ASC LIMIT 10";
        $results = $db->select($table, $data, $where);
        $db->closeConnection();

        $layout = array(
            "bodyPage" => "rankings",
            "title" => "Player Ranking",
            "players" => $results
        );

        Layout::layout($layout);
    }

    /**
     * authenticate function will receive POST variables and authenticate 
     * It will redirect to player class on successfull authentication or display login form with error message
     */
    public function authenticate() {
        $authArray = Encryption::inputSanitizations($_POST["Auth"]);
        $authorization = new Authorization();
        $valid = $authorization->checkCredentials($authArray);
        /**
         * if the login is successfull we want to send the user to player class
         */
        if ($valid) {
            header("Location: player/profile");
        } else {
            Error::setErrorMessage("Username or password does not match");
            header("Location: login");
        }
    }

}

?>
