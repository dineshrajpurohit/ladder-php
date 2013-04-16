<?php

/**
 * Description of Encryption
 *
 * @author rajpurohit
 * All the encryptions will be handled in this files
 * 
 * 
 */
class Encryption {

    const CYPHER = MCRYPT_RIJNDAEL_256;
    const MODE   = MCRYPT_MODE_CBC;
    
    /**
     *
     * @param string $algo The algorithm (md5, sha1, whirlpool, etc)
     * @param string $data The data to encode
     * @param string $salt The salt (This should be the same throughout the system probably)
     * @return string The hashed/salted data
     * 
     * This function will be used to encrypt fields like password
     */
    public static function create($algo, $data) {
        $context = hash_init($algo, HASH_HMAC, SALT);
        hash_update($context, $data);
        return hash_final($context);
    }

    /**
     *
     * @param type $plaintext
     * @return type 
     * 
     * We are using AES algorithm
     * 
     * this function can be used if we want to encrypt certain variables
     */
    public static function encrypt($plaintext) {
        $td = mcrypt_module_open(self::CYPHER, '', self::MODE, '');
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        mcrypt_generic_init($td, SALT, $iv);
        $crypttext = mcrypt_generic($td, $plaintext);
        mcrypt_generic_deinit($td);
        return base64_encode($iv . $crypttext);
    }

    /**
     *
     * @param type $crypttext
     * @return type 
     * 
     * this function is used when we want the variable to be decrypted back
     */
    public static function decrypt($crypttext) {
        $crypttext = base64_decode($crypttext);
        $plaintext = '';
        $td = mcrypt_module_open(self::CYPHER, '', self::MODE, '');
        $ivsize = mcrypt_enc_get_iv_size($td);
        $iv = substr($crypttext, 0, $ivsize);
        $crypttext = substr($crypttext, $ivsize);
        if ($iv) {
            mcrypt_generic_init($td, SALT, $iv);
            $plaintext = mdecrypt_generic($td, $crypttext);
        }
        return trim($plaintext);
    }

}

?>
