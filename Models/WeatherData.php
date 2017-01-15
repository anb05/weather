<?php

/**
 * Класс отслеживающий текущие погодные условия.
 *
 * Класс позволяет отслеживать следующие параметры:
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
 * @author A.Bovkun <a.n.bovkun@gmail.com>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link http://localhost/index.php
 */

namespace Observer\Models;

use Observer\Contracts\Subject;
use Observer\Contracts\Observer;


/**
 * Class WeatherData from pattern Observer
 *
 * @category Models
 *
 * @package Observer\Models
 *
 * @author A.Bovkun <a.n.bovkun@gmail.com>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link http://localhost/index.php
 */


class WeatherData implements Subject
{
    /**
     * Массив для хранения наблюдателей
     *
     * @var array $arrayList
     */
    protected $arrayList = [];


    /**
     * Текущее значение температуры, грд. Цельсия
     *
     * @var float $temperature
     */
    protected $temperature = 0;


    /**
     * Текущее значение влажности, %
     *
     * @var float $humidity
     */
    protected $humidity = 75;


    /**
     * Текущее значение атмосферного давления, мм. рт. столба
     *
     * @var float $pressure
     */
    protected $pressure = 760;


    /**
     * Конструктор класса
     *
     * @return void
     */
    public function __construct()
    {
        //echo "<br> Конструктор класса WeatherData <br>\n";

    }


    /**
     * Метод для регистрации наблюдателя
     *
     * @param Observer $observer объект наблюдателя
     *
     * @return void
     */
    public function registerObserver(Observer $observer)
    {
        if (!in_array($observer, $this->arrayList, true)) {
            $this->arrayList[] = $observer;
        }
    }


    /**
     * Метод для отмены подписки
     *
     * @param Observer $observer объект наблюдателя
     *
     * @return void
     */
    public function removeObserver(Observer $observer)
    {
        if ($key = array_search($observer, $this->arrayList, true)) {
            unset($this->arrayList[$key]);
            $this->arrayList = array_values($this->arrayList);
        }
        echo "<br>arrayList<br>\n";
        var_dump($this->arrayList);
    }


    /**
     * Метод оповещения наблюдателей
     * 
     * @return void
     */
    public function notifyObserver()
    {
        echo "<br>Оповещение наблюдателей<br>\n";
        foreach ($this->arrayList as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    /**
     *
     */
    public function measurementsChanged()
    {
    }
}
