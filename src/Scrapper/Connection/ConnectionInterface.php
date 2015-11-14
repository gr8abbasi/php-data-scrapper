<?php

namespace Scrapper\Connection;

/**
 * Scrapper\Connection\ConnectionInterface
 */
interface ConnectionInterface
{
    /**
     * @param string $url
     */
    public function __construct($url);
}
