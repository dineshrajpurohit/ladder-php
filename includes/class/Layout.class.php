<?php

/**
 * Layout class to set the layout according to the requested page
 * This can be modified enhance the purpose
 *
 * @author rajpurohit
 */
abstract class Layout {

    private static $smarty;

    private function __construct() {
        /**
         * We want to assign the websitter header by default
         */        
       
    }

    /**
     * This function will be used to transfer to our desired layed along with the varibale
     * 
     */
    public static function layout($layout) {
        /**
         * we want to assign the public path to all the layouts
         * so that css and js files can me extended  
         *  
         */
        include_once SMARTY . "Smarty.class.php";
        self::$smarty = new Smarty();
        self::$smarty->assign("public_path", PUBLIC_PATH);
        self::$smarty->assign("ladder_header", LADDER_HEADER);
        
        if (!empty($layout)) {
            foreach ($layout as $key => $value) {
                self::$smarty->assign($key, $value);
            }
            if (!array_key_exists("bodyPage", $layout))
                self::$smarty->assign("bodyPage", "index");
        }
        self::$smarty->display("layout.tpl");
    }

}

?>
