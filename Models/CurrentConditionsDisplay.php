<?php

/**
 * Класс для вывода текущего сотстояния погоды
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
 * @author Anb05 <alexandr05@list.ru>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link https://github.com/anb05/weather.git
 */

namespace Observer\Models;

use Observer\Contracts\DisplayElement;
use Observer\Contracts\Observer;


/**
 * Class CurrentConditionsDisplay from pattern Observer
 *
 * @category Models
 *
 * @package Observer\Models
 *
 * @author Anb05 <alexandr05@list.ru>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link https://github.com/anb05/weather.git
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
        //echo "<br>arrayList<br>\n";
        //ar_dump($this->arrayList);
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
     * Оповещение наблюдателей о появлении новых данных
     *
     * @return void
     */
    public function measurementsChanged()
    {
        $this->notifyObserver();
    }


    /**
     * Загрузка новых метеоданных (имитатор)
     *
     * @param float $temperature текущая температура
     * @param float $humidity    текущая влажность
     * @param float $pressure    текущее давление
     *
     * @return void
     */
    public function setMeasurements(
        float $temperature = 15.55, 
        float $humidity    = 80.88, 
        float $pressure    = 777
    ) {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;

        $this->measurementsChanged();
    }
}
