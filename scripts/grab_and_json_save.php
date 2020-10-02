<?php

use app\Factories\OpenWeatherToJsonFactory;

require __DIR__.'/../vendor/autoload.php';

$token = require __DIR__.'/api_token.php';
$grabber = (new OpenWeatherToJsonFactory($token))->buildGrabber();
$grabber->fetchNewDataToFile('Moscow', __DIR__.'/results/wheather.json');