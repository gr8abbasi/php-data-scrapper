<?php

namespace Scrapper;

/**
 *  Scrapper\Connection
 */
class Connection
{
    /**
     * @var string $url
     */
    protected $url;

    /**
     * @param string $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Connect to the given URL using cURL
     *
     */
    public function connect()
    {
        $ch = curl_init();

        // Set URL to fetch/explore
        curl_setopt($ch, CURLOPT_URL, $this->url);

        // Set a referer
        curl_setopt($ch, CURLOPT_REFERER, 'http://www->example->org/yay->htm');

        // User agent
        curl_setopt($ch, CURLOPT_USERAGENT, 'MozillaXYZ/1.0');

        // Include header in result? (0 = yes, 1 = no)
        curl_setopt($ch, CURLOPT_HEADER, 0);

        // Should cURL return or print out the data? (true = return, false = print)
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Timeout in seconds
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
        $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
        curl_close($ch);
        return $output;
    }
}
