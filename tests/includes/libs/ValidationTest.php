<?php
require '../..../../../../includes/libs/Validation.php';
class ValidationTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Validation
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Validation;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Validation::validates_presence_of
     * @todo   Implement testValidates_presence_of().
     */
    public function testValidates_presence_of() {
        /**
         * checking whether the test passes when an empty field or null vlaue is passed
         */
        $array = array("testUser", "", NULL);
        $this->assertTrue($this->object->validates_presence_of($array[0]) === "success");   
        $this->assertTrue($this->object->validates_presence_of($array[1]) !== "success"); 
        $this->assertTrue($this->object->validates_presence_of($array[2]) !== "success"); 
    }

    /**
     * @covers Validation::validates_length_of
     * @todo   Implement testValidates_length_of().
     */
    public function testValidates_length_of() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Validation::validates_format_of
     * @todo   Implement testValidates_format_of().
     */
    public function testValidates_format_of() {
        $emailRegex = "/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD";
       $test1 = array("email" => "testUser@test.com", "with" => $emailRegex);
       $test2 = array("email" => "123456789", "with" => $emailRegex);
       $test3 = array("email" => "testuser.com", "with" => $emailRegex);
       $this->assertTrue($this->object->validates_format_of($test1) === "success");
       $this->assertTrue($this->object->validates_format_of($test2) !== "success");
       $this->assertTrue($this->object->validates_format_of($test3) !== "success");
    }

}
