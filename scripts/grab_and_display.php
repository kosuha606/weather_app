<?php

use app\Factories\WeatherGrabberFactory;

require __DIR__ . '/../vendor/autoload.php';

$token = require __DIR__ . '/api_token.php';
$grabber = (new WeatherGrabberFactory($token))->buildGrabber();
$data = $grabber->setHoursOffset(22)->grabByLatLng(51.7387477,36.1774436);

print_r($data);