<?php

namespace app\Factories;

use app\DataProviders\OpenWeatherMapDataProvider;
use app\Interfaces\WeatherGrabberFactoryInterface;
use app\SaveStrategies\XmlSaveStrategy;
use app\WeatherGrabber;

class OpenWheatherToXmlFactory implements WeatherGrabberFactoryInterface
{
    /**
     * @return WeatherGrabber
     */
    public function buildGrabber(): WeatherGrabber
    {
        return new WeatherGrabber(new OpenWeatherMapDataProvider(), new XmlSaveStrategy());
    }
}
