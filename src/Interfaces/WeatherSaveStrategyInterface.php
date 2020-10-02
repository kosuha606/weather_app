<?php

namespace app\Interfaces;

interface WeatherSaveStrategyInterface
{
    /**
     * @param string $fileName
     * @param WeatherDtoInterface[] $data
     * @return bool
     */
    public function saveData(string $toFilePath, WeatherDtoInterface $data): bool;
}
