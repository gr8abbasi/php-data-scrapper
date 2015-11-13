<?php

namespace Scrapper\Sorter;

/**
 * Scrapper\Sorter\SorterInterface
 */
interface SorterInterface
{
    /**
     * @param string $column
     * @param string $order
     */
    public function __construct($column, $order);

    /**
     * Sort the array based on column
     *
     * @return array
     */
    public function sort();
}
