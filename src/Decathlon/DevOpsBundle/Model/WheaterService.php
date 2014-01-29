<?php

namespace Decathlon\DevOpsBundle\Model;

use Symfony\Component\DomCrawler\Crawler;

class WheaterService
{
    private $cityURL;
    private $temperature;

    public function __construct($cityUrl)
    {
        $this->cityURL = $cityUrl;
    }

    public function getTemperature()
    {
        $this->setTemperature();

        return $this->temperature;
    }

    private function setTemperature()
    {
        $xml = file_get_contents($this->cityURL);
        $crawler = new Crawler($xml);

        $this->temperature = $crawler->filter('temperatura')->eq(0)->children()->eq(0)->text();

    }
}
