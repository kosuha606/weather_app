<?php

namespace app\Interfaces;

use app\WeatherGrabber;

interface WeatherGrabberFactoryInterface
{
    /**
     * @return WeatherGrabber
     */
    public function buildGrabber(): WeatherGrabber;
}
