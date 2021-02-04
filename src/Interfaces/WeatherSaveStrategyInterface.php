<?php

namespace app\Interfaces;

interface WeatherSaveStrategyInterface
{
    /**
     * @param WeatherDtoInterface $data
     * @return bool
     */
    public function saveData(WeatherDtoInterface $data): bool;
}
