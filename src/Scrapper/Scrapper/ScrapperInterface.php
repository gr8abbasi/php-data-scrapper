<?php

namespace Scrapper\Scrapper;

/**
 * Scrapper\Scrapper\ScrapperInterface
 */
interface ScrapperInterface
{
    /**
     * @param string $start
     * @param string $end
     */
    public function __construct($start, $end);
}
