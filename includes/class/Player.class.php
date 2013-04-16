<?php
/**
 * This class will display all the pages related to player 
 *
 * @author rajpurohit
 */
class Player {
    //put your code here
    
    public function run(){
       $layout = array(
           "bodyPage" => "index",
           "title" => "Player home page"
       );  
       
       Layout::layout($layout);
    }
    
    public  function logout(){
        Session::destroySession();
    }
}

?>
