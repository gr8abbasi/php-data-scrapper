<?php

namespace Scrapper\Scrapper;

/**
 * Scrapper\Scrapper\AbstractScrapper implements ScrapperInterface
 */
abstract class AbstractScrapper implements ScrapperInterface
{
    /**
     * @var string $start
     */
    protected $start;

    /**
     * @var string $end
     */
    protected $end;

    /**
     * {@inheritdoc}
     */
    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * Scrap data by given range
     */
    abstract public function scrap();
}
