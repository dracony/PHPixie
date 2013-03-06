<?php
require_once('/../../../../modules/database/classes/database/expression.php');
/**
 * Generated by PHPUnit_SkeletonGenerator on 2013-02-07 at 10:14:10.
 */
class Expression_DatabaseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Expression_Database
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Expression_Database('test');
    }
	
	/**
     * @covers Expression_Database::__construct
     */
    public function testConstruct()
    {
        $this->assertEquals('test',$this->object->value);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }
}