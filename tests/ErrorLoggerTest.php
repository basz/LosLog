<?php
namespace LosMiddleware\LosLog;

use Zend\Log\Logger;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-02 at 10:24:09.
 */
class ErrorLoggerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers LosMiddleware\LosLog\ErrorLogger::registerHandlers
     */
    public function testRegisterHandlers()
    {
        ErrorLogger::registerHandlers('error.log', '.');

        $logger = AbstractLogger::generateFileLogger('error.log', '.')->getLogger();
        $writer = new \Zend\Log\Writer\Mock();
        $logger->addWriter($writer);

        //Ensures it's already registered
        $this->assertFalse(Logger::registerErrorHandler($logger));
    }
}