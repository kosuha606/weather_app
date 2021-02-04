<?php

namespace app\Interfaces;

use app\Dto\WeatherDetailDto;

interface WeatherDtoInterface
{
    /**
     * @return string
     */
    public function getDate(): string;

    /**
     * @return string
     */
    public function getWindSpeed(): string;

    /**
     * @return string
     */
    public function getWindDirection(): string;

    /**
     * @return string
     */
    public function getTemperature(): string;

    /**
     * @return WeatherDetailDto[]
     */
    public function getWeatherDetails(): array;
}
