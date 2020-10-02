<?php

use app\Factories\OpenWheatherToXmlFactory;

require __DIR__.'/../vendor/autoload.php';

$grabber = (new OpenWheatherToXmlFactory())->buildGrabber();
$grabber->fetchNewDataToFile('Moscow', __DIR__.'/results/wheather.xml');