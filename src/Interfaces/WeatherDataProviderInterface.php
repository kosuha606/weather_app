<?php

namespace app\Interfaces;

interface WeatherDataProviderInterface
{
    /**
     * @return WeatherDtoInterface
     */
    public function grabData(string $cityName): WeatherDtoInterface;
}
