<?php

namespace Scrapper\Parser;

/**
 * Scrapper\Parser\AbstractParser implements ParserInterface
 */
abstract class AbstractParser implements ParserInterface
{
    /**
     * @var string
     */
    protected $data;

    /**
     * {@inheritdoc}
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Parse data into an Array
     *
     * @return array
     */
    abstract public function parse();
}
