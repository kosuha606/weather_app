<?php

namespace app;

use app\Interfaces\WeatherDataProviderInterface;
use app\Interfaces\WeatherSaveStrategyInterface;

class WeatherGrabber
{
    /**
     * @var WeatherDataProviderInterface
     */
    private $dataProvider;

    /**
     * @var WeatherSaveStrategyInterface
     */
    private $saveStrategy;

    public function __construct(
        WeatherDataProviderInterface $dataProvider,
        WeatherSaveStrategyInterface $saveStrategy
    ) {
        $this->dataProvider = $dataProvider;
        $this->saveStrategy = $saveStrategy;
    }

    /**
     * @param string $cityName
     * @param string $toFilePath
     */
    public function fetchNewDataToFile(string $cityName, string $toFilePath): void
    {
        $this->saveStrategy->saveData($toFilePath, $this->dataProvider->grabData($cityName));
    }
}
