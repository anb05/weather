<?php

/**
 * Класс для отображения текущего сотстояния погоды
 *
 * Класс позволяет отображать следующие параметры:
 *     - температуру
 *     - влажность 
 *     - давление
 *
 * PHP version 7.0.1
 *
 * @category Learn
 *
 * @package Observer\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link https://github.com/anb05/weather.git
 */

namespace Observer\Models;

use Observer\Contracts\DisplayElement;
use Observer\Contracts\Observer;
use Observer\Contracts\Subject;

/**
 * Class CurrentConditionsDisplay from pattern Observer
 *
 * @category Models
 *
 * @package Observer\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link https://github.com/anb05/weather.git
 */


class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /**
     * Текущее значение температуры, грд. Цельсия
     *
     * @var float $temperature
     */
    protected $temperature;


    /**
     * Текущее значение влажности, %
     *
     * @var float $humidity
     */
    protected $humidity;


    /**
     * Текущее значение атмосферного давления, мм. рт. столба
     *
     * @var float $pressure
     */
    protected $pressure;


    /**
     * Объект наблюдателя
     *
     * @var Subject $weatherData
     */
    protected $weatherData;


    /**
     * Конструктор класса
     *
     * @param Subject $weatherData объкт наблюдателя
     *
     * @return void
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }


    /**
     * Метод для регистрации наблюдателя
     *
     * @param float $temperature текущая температура
     * @param float $humidity    текущая влажность
     * @param float $pressure    текущее давление
     *
     * @return void
     */
    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;

        $this->display();
    }


    /**
     * Метод просто выводит текущие значения
     *      температуры,
     *      влажности, 
     *      атмосферного давления
     *
     * @return void
     */
    public function display()
    {
        echo "<br>Текущие погодные условия:<br>\n" . 
            $this->temperature . " грд. Цельсия<br>\n" .
            $this->humidity . " % (влажность)<br>\n" .
            $this->pressure . " мм. рт. столба<br>\n";
    }

}
