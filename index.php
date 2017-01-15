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
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
 */ 

//namespace Observer;

use Observer\Models\WeatherData;

echo "<br>Запуск скрипта<br>\n";

require_once __DIR__ . "/Generals/myHelper.php";

$test = new WeatherData();

