<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Error
 *
 * @author rajpurohit
 */
class Error {
     
    /**
     *
     * @param type $url 
     * 
     * call the 404 page when the user tries to access a page that does not exists
     */
    public static function display404($url = null){
        
        $url = (is_array($url)) ? implode("/", $url) : $url; ;
        
        $layout = array(
            "bodyPage" => "error404",
            "title" => "Error Page", 
            "requested_page" => $url
        );
        
        Layout::layout($layout);
    }
}

?>
