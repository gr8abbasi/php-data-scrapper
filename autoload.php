<?php

spl_autoload_register(
    function ($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'Scrapper\\Connection' => '/src/Scrapper/Connection.php',
                'Scrapper\\Parser'     => '/src/Scrapper/Parser.php',
                'Scrapper\\Scrapper'   => '/src/Scrapper/Scrapper.php',
                'Scrapper\\Sorter'     => '/src/Scrapper/Sorter.php',
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
