<?php

namespace Scrapper\Sorter;

/**
 * Scrapper\Sorter\AbstractSorter implements SorterInterface
 */
class AbstractSorter implements SorterInterface
{
    /**
     * @var string
     */
    protected $column;

    /**
     * @var string
     */
    protected $order = 'DESC';

    /**
     * {@inheritdoc}
     */
    public function __construct($column, $order)
    {
        $this->column = $column;
        $this->order = $order;
    }

    /**
     * {@inheritdoc}
     */
    public function sort()
    {
    }
}
