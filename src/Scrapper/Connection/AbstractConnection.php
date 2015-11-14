<?php

namespace Scrapper\Connection;

/**
 *  Scrapper\Connection\AbstractConnection
 */
abstract class AbstractConnection implements ConnectionInterface
{
    /**
     * @var string
     */
    protected $url;

    /**
     * {@inheritdoc}
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Connect to the given URL and fetch data
     *
     * @return string
     */
    abstract public function connect();
}
