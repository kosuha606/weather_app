<?php

use app\Factories\OpenWheatherToXmlFactory;

require __DIR__.'/../vendor/autoload.php';

$token = require __DIR__.'/api_token.php';
$grabber = (new OpenWheatherToXmlFactory($token))->buildGrabber();
$grabber->fetchNewDataToFile('Moscow', __DIR__.'/results/wheather.xml');