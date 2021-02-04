<?php

namespace app\Interfaces;

interface WeatherDataProviderInterface
{
    /**
     * @param float $lat
     * @param float $lng
     * @return WeatherDtoInterface
     */
    public function grabByLatLng(float $lat, float $lng): WeatherDtoInterface;

    /**
     * @param int $offset
     * @return $this
     */
    public function setHoursOffset(int $offset): self;
}
