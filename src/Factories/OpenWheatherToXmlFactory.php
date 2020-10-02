<?php

namespace app\Factories;

use app\DataProviders\OpenWeatherMapDataProvider;
use app\Interfaces\WeatherGrabberFactoryInterface;
use app\SaveStrategies\XmlSaveStrategy;
use app\Traits\ApiTokenTrait;
use app\WeatherGrabber;

class OpenWheatherToXmlFactory implements WeatherGrabberFactoryInterface
{
    use ApiTokenTrait;

    /**
     * @return WeatherGrabber
     */
    public function buildGrabber(): WeatherGrabber
    {
        return new WeatherGrabber(new OpenWeatherMapDataProvider($this->apiToken), new XmlSaveStrategy());
    }
}
