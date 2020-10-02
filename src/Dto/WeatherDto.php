<?php

namespace app\Dto;

use app\Interfaces\WeatherDtoInterface;

class WeatherDto implements WeatherDtoInterface
{
    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $windSpeed;

    /**
     * @var string
     */
    private $windDirection;

    /**
     * @var string
     */
    private $temperature;

    /**
     * @var string
     */
    private $city;

    public function __construct(
        string $city,
        string $date,
        string $windSpeed,
        string $windDirection,
        string $temperature
    ) {
        $this->date = $date;
        $this->windSpeed = $windSpeed;
        $this->windDirection = $windDirection;
        $this->temperature = $temperature;
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getWindSpeed(): string
    {
        return $this->windSpeed;
    }

    /**
     * @return string
     */
    public function getWindDirection(): string
    {
        return $this->windDirection;
    }

    /**
     * @return string
     */
    public function getTemperature(): string
    {
        return $this->temperature;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'city'          => $this->city,
            'date'          => $this->date,
            'windSpeed'     => $this->windSpeed,
            'windDirection' => $this->windDirection,
            'temperature'   => $this->temperature,
        ];
    }
}