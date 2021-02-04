<?php

declare(strict_types=1);

namespace app\Factories;

use app\Interfaces\WeatherGrabberFactoryInterface;
use app\WeatherGrabber;

class OpenWeatherToArrayFactory implements WeatherGrabberFactoryInterface
{
    private string $apiToken;

    /**
     * @param string $apiToken
     */
    public function __construct(string $apiToken)
    {
        $this->apiToken = $apiToken;
    }

    public function buildGrabber(): WeatherGrabber
    {
        // TODO: Implement buildGrabber() method.
    }
}
