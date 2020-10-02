<?php

namespace app\SaveStrategies;

use app\Interfaces\WeatherDtoInterface;
use app\Interfaces\WeatherSaveStrategyInterface;

class JsonSaveStrategy implements WeatherSaveStrategyInterface
{
    /**
     * @param string $toFilePath
     * @param WeatherDtoInterface $data
     * @return bool
     */
    public function saveData(string $toFilePath, WeatherDtoInterface $data): bool
    {
        $result = true;

        $dataArray = [
            'date'           => $data->getDate(),
            'temperature'    => $data->getTemperature(),
            'wind_direction' => $data->getWindDirection(),
            'wind_speed'     => $data->getWindSpeed(),
            'city'           => $data->getCity(),
        ];
        $jsonString = json_encode($dataArray);

        if ($jsonString !== false) {
            file_put_contents($toFilePath, $jsonString);
        } else {
            $result = false;
        }

        return $result;
    }
}
