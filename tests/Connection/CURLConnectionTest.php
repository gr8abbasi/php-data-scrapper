<?php

namespace tests\Connection;

use PHPUnit_Framework_TestCase;
use Scrapper\Connection\CURLConnection;

/**
 * \CURLConnectionTest
 */
class CURLConnectionTest extends PHPUnit_Framework_TestCase
{
    /** @var CURLConnection */
    protected $fixture;

    /** @var string $url */
    protected $url;

    public function setUp()
    {
        $this->url = 'http://www.amazon.com/s/?url=search-alias%3Daps&field-keywords=iphone';
        $this->fixture = new CURLConnection($this->url);
    }

    /**
     * @test
     * Connection object can be instantiated Scrapper\Connection\ConnectionInterface
     */
    public function isInstanceofConnectionInterface()
    {
        $this->assertInstanceOf('Scrapper\Connection\ConnectionInterface', $this->fixture);
    }

    /**
     * @test
     */
    public function canConnectToURLUsingCURL()
    {
        // preg_match("/<html>(.*?)<\/html>/s", $this->fixture->connect(), $regs);
        // print_r($regs);exit;
        // if (preg_match("/<html>(.*?)<\/html>/s", $this->fixture->connect(), $regs)) {
        //     die('hererer');
        //     $this->assertTrue(true);
        // }
        $this->assertNotEmpty($this->fixture->connect());
    }
}
