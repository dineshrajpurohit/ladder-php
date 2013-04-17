<?php
require '../../../includes/libs/Encryption.php';
class EncryptionTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Encryption
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Encryption;
       
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Encryption::create
     * @todo   Implement testCreate().
     */
    public function testCreate() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Encryption::encrypt
     * @todo   Implement testEncrypt().
     */
    public function testEncrypt() {
        /**
         * test whether the encryption is done properly
         */
    }

    /**
     * @covers Encryption::decrypt
     * @todo   Implement testDecrypt().
     */
    public function testDecrypt() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Encryption::inputSanitizations
     * @todo   Implement testInputSanitizations().
     */
    public function testInputSanitizations() {
       /**
        * check if the input sanitization works
        */
    }

}
