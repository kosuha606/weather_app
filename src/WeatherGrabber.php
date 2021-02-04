<?php

namespace app;

use app\Interfaces\WeatherDataProviderInterface;
use app\Interfaces\WeatherDtoInterface;

class WeatherGrabber
{
    private WeatherDataProviderInterface $dataProvider;

    /**
     * @param WeatherDataProviderInterface $dataProvider
     */
    public function __construct(
        WeatherDataProviderInterface $dataProvider
    ) {
        $this->dataProvider = $dataProvider;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function setHoursOffset(int $offset): self
    {
        $this->dataProvider->setHoursOffset($offset);

        return $this;
    }

    /**
     * @param float $lat
     * @param float $lng
     * @return WeatherDtoInterface
     */
    public function grabByLatLng(float $lat, float $lng): WeatherDtoInterface
    {
        return $this->dataProvider->grabByLatLng($lat, $lng);
    }
}
