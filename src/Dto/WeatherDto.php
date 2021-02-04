<?php

namespace app\Dto;

use app\Interfaces\WeatherDtoInterface;

class WeatherDto implements WeatherDtoInterface
{
    private string $date;
    private string $windSpeed;
    private string $windDirection;
    private string $temperature;
    /** @var WeatherDetailDto[] */
    private array $weatherDetails;

    public function __construct(
        string $date,
        string $windSpeed,
        string $windDirection,
        string $temperature
    ) {
        $this->date = $date;
        $this->windSpeed = $windSpeed;
        $this->windDirection = $windDirection;
        $this->temperature = $temperature;
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
     * @param WeatherDetailDto $weatherDetailDto
     * @return $this
     */
    public function addWeatherDetail(WeatherDetailDto $weatherDetailDto): self
    {
        $this->weatherDetails[] = $weatherDetailDto;
        return $this;
    }

    /**
     * @return WeatherDetailDto[]
     */
    public function getWeatherDetails(): array
    {
        return $this->weatherDetails;
    }

    /**
     * @param string $date
     * @return $this
     */
    public function setDate(string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param string $windSpeed
     * @return $this
     */
    public function setWindSpeed(string $windSpeed): self
    {
        $this->windSpeed = $windSpeed;
        return $this;
    }

    /**
     * @param string $windDirection
     * @return $this
     */
    public function setWindDirection(string $windDirection): self
    {
        $this->windDirection = $windDirection;
        return $this;
    }

    /**
     * @param string $temperature
     * @return $this
     */
    public function setTemperature(string $temperature): self
    {
        $this->temperature = $temperature;
        return $this;
    }
}