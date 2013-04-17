<?php

/**
 * Description of Validation
 * 
 * Wanted to implement validations similar to ruby on rails validations
 * use of function names like
 * validate_presence_of
 * validate_numericality_of etc..
 *
 * @author rajpurohit
 */
class Validation {

    private $errorMessage;

    /**
     * checks if the arrtirbutes are present when the form was submitted
     * @param type $attrs  - array of the values to be check for presence
     * 
     */
    public function validates_presence_of($attrs) {
        $checkPresence = true; // always assume the data is present
        foreach ($attrs as $attrKey => $attrValue) {
            if ($attrValue == '' || $attrValue == null) {
                $this->errorMessage .= ucfirst($attrKey) . " should not be empty<br/>";
                $checkPresence = FALSE;
            }
        }
        return (($checkPresence) ? "success" : $this->errorMessage);
    }

    /**
     *
     * @param type $attrs - aaray with 2 values 
     * 1> attr name
     * 2> within -> array(min,max)
     * 
     */
    public function validates_length_of($attrs) {
        
    }

    /**
     *
     * @param type $attrs - array of values
     * elements
     * 1> name of the field we have to check the format of
     * 2> with variable to to check with the following regular expression
     * 
     */
    public function validates_format_of($attrs) {
        reset($attrs);
        $attr = key($attrs);
        if ($attr != "") {
            $with = $attrs["with"];
            if (!preg_match($with, $attrs[$attr])) {
                switch ($attr) {
                    case "email":
                        $this->errorMessage .= "{$attr} should be of proper format e.g test@test.com<br/>";
                        break;
                    case "password":
                        $this->errorMessage .= "{$attr} should be of proper format. Only A-Z,a-z,0-9 allowed";
                        break;
                    default :
                        $this->errorMessage .= "{$attr} should be of proper format";
                }
                return $this->errorMessage;
            } else {
                return "success";
            }
        }
    }

}

?>
