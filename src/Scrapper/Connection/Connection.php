<?php

namespace Scrapper;

class Connection
{
    /**
     * @var
     */
    protected $url;

    public function __construct()
    {
        $this->url = 'example.com';
    }
}
