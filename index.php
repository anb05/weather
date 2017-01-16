<?php

/**
 * Learn Design Patterns 
 *
 * PHP version 7.0.1
 *
 * @category Learn
 *
 * @package Observer
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license MIT <mit@example.com>
 *
 * @link https://github.com/anb05/weather.git
 */ 

//namespace Observer;

use Observer\Models\WeatherData;
use Observer\Models\CurrentConditionsDisplay;

echo "<br>Запуск скрипта<br>\n";

require_once __DIR__ . "/Generals/myHelper.php";

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(21, 65, 777);
$weatherData->setMeasurements(24, 75, 757);
$weatherData->setMeasurements(31, 85, 767);
