<?php

declare(strict_types=1);

namespace app\SaveStrategies;

use app\Interfaces\WeatherDtoInterface;
use app\Interfaces\WeatherSaveStrategyInterface;

class ArraySaveStrategy implements WeatherSaveStrategyInterface
{
    public function saveData(WeatherDtoInterface $data): bool
    {
        // TODO: Implement saveData() method.
    }
}
