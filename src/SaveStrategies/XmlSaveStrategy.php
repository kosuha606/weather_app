<?php

namespace app\SaveStrategies;

use app\Interfaces\WeatherDtoInterface;
use app\Interfaces\WeatherSaveStrategyInterface;
use SimpleXMLElement;

class XmlSaveStrategy implements WeatherSaveStrategyInterface
{
    /**
     * @param string $toFilePath
     * @param WeatherDtoInterface $data
     * @return bool
     */
    public function saveData(string $toFilePath, WeatherDtoInterface $data): bool
    {
        $result = true;

        try {
            $xml = new SimpleXMLElement('<root/>');
            $xml->addChild('date', $data->getDate());
            $xml->addChild('wind_speed', $data->getWindSpeed());
            $xml->addChild('temperature', $data->getTemperature());
            $xml->addChild('wind_direction', $data->getWindDirection());
            $xml->addChild('city', $data->getCity());
            $xml->asXML($toFilePath);
        } catch (\Exception $exception) {
            $result = false;
        }

        return $result;
    }
}
