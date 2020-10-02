<?php

namespace app\Factories;

use app\DataProviders\OpenWeatherMapDataProvider;
use app\Interfaces\WeatherGrabberFactoryInterface;
use app\SaveStrategies\JsonSaveStrategy;
use app\Traits\ApiTokenTrait;
use app\WeatherGrabber;

class OpenWeatherToJsonFactory implements WeatherGrabberFactoryInterface
{
    use ApiTokenTrait;

    /**
     * @return WeatherGrabber
     */
    public function buildGrabber(): WeatherGrabber
    {
        return new WeatherGrabber(new OpenWeatherMapDataProvider($this->apiToken), new JsonSaveStrategy());
    }
}
