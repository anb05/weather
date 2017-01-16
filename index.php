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
 * @author Anb05 <alexandr05@list.ru>
 *
 * @license MIT <mit@example.com>
 *
 * @link https://github.com/anb05/weather.git
 */ 

//namespace Observer;

use Observer\Models\WeatherData;

echo "<br>Запуск скрипта<br>\n";

require_once __DIR__ . "/Generals/myHelper.php";

$test = new WeatherData();
echo "<br>weather<br>\n";
var_dump($test);

$test->notifyObserver();

$test->setMeasurements();
echo "<br>weather<br>\n";
var_dump($test);


