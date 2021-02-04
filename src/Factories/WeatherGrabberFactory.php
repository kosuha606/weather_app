<?php

declare(strict_types=1);

namespace app\Factories;

use app\DataProviders\OpenWeatherMapDataProvider;
use app\Interfaces\WeatherGrabberFactoryInterface;
use app\WeatherGrabber;

class WeatherGrabberFactory implements WeatherGrabberFactoryInterface
{
    private string $apiToken;

    /**
     * @param string $apiToken
     */
    public function __construct(string $apiToken)
    {
        $this->apiToken = $apiToken;
    }

    /**
     * @return WeatherGrabber
     */
    public function buildGrabber(): WeatherGrabber
    {
        return new WeatherGrabber(new OpenWeatherMapDataProvider($this->apiToken));
    }
}
