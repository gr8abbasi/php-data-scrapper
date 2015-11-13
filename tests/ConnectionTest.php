<?php

namespace tests;

use PHPUnit_Framework_TestCase;
use Scrapper\Connection;

/**
 * \ConnectionTest
 */
class ConnectionTest extends PHPUnit_Framework_TestCase
{
    /** @var Connection */
    protected $fixture;

    /** @var string $url */
    protected $url;

    public function setUp()
    {
        $this->url = "http://www.amazon.com/s/?url=search-alias%3Daps&field-keywords=iphone";
        $this->fixture = new Connection($this->url);
    }

    /**
     * @test
     * Connection object can be instantiated Scrapper\Connection
     */
    public function isInstanceofConnection()
    {
        $this->assertInstanceOf('Scrapper\Connection', $this->fixture);
    }

    /**
     * @test
     */
    public function canConnectToURLUsingCURL()
    {
        $input = "";
        $expected = $this->fixture->connect();
        $this->assertEquals($input, $expected);
    }
}
