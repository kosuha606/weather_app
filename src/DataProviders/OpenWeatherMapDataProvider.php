<?php

namespace app\DataProviders;

use app\Dto\WeatherDetailDto;
use app\Dto\WeatherDto;
use app\Interfaces\WeatherDataProviderInterface;
use app\Interfaces\WeatherDtoInterface;
use JsonException;

class OpenWeatherMapDataProvider implements WeatherDataProviderInterface
{
    private string $apiToken;
    private string $serviceUrl = 'http://api.openweathermap.org';
    private string $lang = 'ru';
    private string $units = 'metric';
    private int $hoursOffset = 0;

    /**
     * @param string $apiToken
     */
    public function __construct(
        string $apiToken
    ) {
        $this->apiToken = $apiToken;
    }

    /**
     * @param float $lat
     * @param float $lng
     * @return WeatherDtoInterface
     * @throws JsonException
     */
    public function grabByLatLng(float $lat, float $lng): WeatherDtoInterface
    {
        $data = json_decode(file_get_contents($this->buildUrl($lat, $lng)), true, 512, JSON_THROW_ON_ERROR);
        $weatherDto = new WeatherDto('no', 'no', 'no', 'no');

        if (isset($data['hourly'][$this->hoursOffset - 1])) {
            $hourlyWeatherData = $data['hourly'][$this->hoursOffset - 1];

            $weatherDto
                ->setDate(date('Y-m-d H:i:s', $hourlyWeatherData['dt']))
                ->setWindSpeed($hourlyWeatherData['wind_speed'])
                ->setTemperature($hourlyWeatherData['temp'])
                ->setWindDirection($hourlyWeatherData['wind_deg']);

            if (isset($hourlyWeatherData['weather'])) {
                foreach ($hourlyWeatherData['weather'] as $weather) {
                    $weatherDto->addWeatherDetail(new WeatherDetailDto(
                        $weather['id'],
                        $weather['description'],
                        $weather['main'],
                    ));
                }
            }
        }

        return $weatherDto;
    }

    /**
     * @param float $lat
     * @param float $lng
     * @return string
     */
    private function buildUrl(float $lat, float $lng): string
    {
        return "{$this->serviceUrl}/data/2.5/onecall?lat={$lat}&lon={$lng}&appid={$this->apiToken}&lang={$this->lang}&units={$this->units}";
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function setHoursOffset(int $offset): self
    {
        $this->hoursOffset = $offset;
        return $this;
    }
}
