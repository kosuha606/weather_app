<?php

namespace app\Factories;

use app\DataProviders\OpenWeatherMapDataProvider;
use app\Interfaces\WeatherGrabberFactoryInterface;
use app\SaveStrategies\JsonSaveStrategy;
use app\WeatherGrabber;

class OpenWeatherToJsonFactory implements WeatherGrabberFactoryInterface
{
    /**
     * @return WeatherGrabber
     */
    public function buildGrabber(): WeatherGrabber
    {
        return new WeatherGrabber(new OpenWeatherMapDataProvider(), new JsonSaveStrategy());
    }
}
