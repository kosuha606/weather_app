<?php

namespace app\DataProviders;

use app\Dto\WeatherDto;
use app\Interfaces\WeatherDataProviderInterface;
use app\Interfaces\WeatherDtoInterface;

class OpenWeatherMapDataProvider implements WeatherDataProviderInterface
{
    /**
     * @var string
     */
    private $apiToken;

    /**
     * @var string
     */
    private $serviceUrl;

    /**
     * @var string
     */
    private $lang;

    /**
     * @var string
     */
    private $units;

    public function __construct(
        string $apiToken = '',
        string $serviceUrl = 'http://api.openweathermap.org',
        string $lang = 'ru',
        string $units = 'metric'
    ) {
        $this->apiToken = $apiToken;
        $this->serviceUrl = $serviceUrl;
        $this->lang = $lang;
        $this->units = $units;
    }

    /**
     * @param string $cityName
     * @return WeatherDtoInterface
     */
    public function grabData(string $cityName): WeatherDtoInterface
    {
        $data = json_decode(file_get_contents($this->buildUrl($cityName)), true);

        return new WeatherDto(
            $cityName,
            date('Y-m-d H:i:s', $data['dt']),
            $data['wind']['speed'],
            $data['wind']['deg'].'deg',
            $data['main']['temp']
        );
    }

    /**
     * @param string $cityName
     * @return string
     */
    private function buildUrl(string $cityName): string
    {
        return "{$this->serviceUrl}/data/2.5/weather?q={$cityName}&appid={$this->apiToken}&lang={$this->lang}&units={$this->units}";
    }
}
