<?php

spl_autoload_register(
    function ($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
               'Scrapper\\Connection\\AbstractConnection'  => '/src/Scrapper/Connection/AbstractConnection.php',
               'Scrapper\\Connection\\ConnectionInterface' => '/src/Scrapper/Connection/ConnectionInterface.php',
               'Scrapper\\Connection\\CURLConnection'      => '/src/Scrapper/Connection/CURLConnection.php',
               'Scrapper\\Parser\\AbstractParser'          => '/src/Scrapper/Parser/AbstractParser.php',
               'Scrapper\\Parser\\ParserInterface'         => '/src/Scrapper/Parser/ParserInterface.php',
               'Scrapper\\Parser\\AmazonParser'            => '/src/Scrapper/Parser/AmazonParser.php',
               'Scrapper\\Scrapper\\AbstractParser'        => '/src/Scrapper/Scrapper/AbstractScrapper.php',
               'Scrapper\\Scrapper\\ScrapperInterface'     => '/src/Scrapper/Scrapper/ScrapperInterface.php',
               'Scrapper\\Scrapper\\AmazonScrapper'        => '/src/Scrapper/Scrapper/AmazonScrapper.php',
               'Scrapper\\Sorter\\AbstractSorter'          => '/src/Scrapper/Sorter/AbstractSorter.php',
               'Scrapper\\Sorter\\SorterInterface'         => '/src/Scrapper/Sorter/SorterInterface.php',
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$class])) {
            require __DIR__ . $classes[$class];
        }

    },
    true,
    false
);
