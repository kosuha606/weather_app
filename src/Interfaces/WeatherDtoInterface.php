<?php

namespace app\Interfaces;

interface WeatherDtoInterface
{
    /**
     * @return string
     */
    public function getDate(): string;

    /**
     * @return string
     */
    public function getCity(): string;

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
     * @return array
     */
    public function toArray(): array;
}
