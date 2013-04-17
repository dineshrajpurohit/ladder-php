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
        $data = array("id","fname", "lname", "rank", "elo");
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

        /**
         * before sending data to the database we want to make sure that user has submitted data
         */
        $validate = new Validation();
        /**
         * Validating whether the user submitted null or empty data
         */
        $presence = $validate->validates_presence_of($authArray);
        /**
         * Validating the format of username
         * 
         * temporrary using this regex. 
         * 
         * Note: Michael's regex carries the regex for email copyright:
         *
         * Copyright © Michael Rushton 2009-10
         * http://squiloople.com/
         * Feel free to use and redistribute this code. But please keep this copyright notice.
         */
        $emailRegex = "/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD";
        $format = $validate->validates_format_of(array("email" => $authArray["email"] , "with" => $emailRegex));
        
        if ($presence != "success" && $format != "success") {
            Error::setErrorMessage($format);
            header("Location: login");
        } else {
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

}

?>
