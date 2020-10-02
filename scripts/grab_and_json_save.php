<?php

use app\Factories\OpenWeatherToJsonFactory;

require __DIR__.'/../vendor/autoload.php';

$grabber = (new OpenWeatherToJsonFactory())->buildGrabber();
$grabber->fetchNewDataToFile('Moscow', __DIR__.'/results/wheather.json');