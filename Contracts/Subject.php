<?php

/**
 * Интерфейс Субъекта патерна "Наблюдатель" (Observer)
 *
 * PHP version 7.0.1
 *
 * @category Learn
 *
 * @package Observer\Contrracts
 *
 * @author A.Bovkun <a.n.bovkun@gmail.com>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link http://localhost/index.php
 */

namespace Observer\Contracts;

use Observer\Contracts\Observer;


/**
 * Interface from pattern Observer
 *
 * @category Contract
 *
 * @package Observer\Contrracts
 *
 * @author A.Bovkun <a.n.bovkun@gmail.com>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link http://localhost/index.php
 */


interface Subject
{
    /**
     * Метод регистрации наблюдателя
     *
     * @param Observer $observer объект наблюдателя
     * 
     * @return void
     */
    public function registerObserver(Observer $observer);


    /**
     * Метод исключения наблюдателя
     *
     * @param Observer $observer объект наблюдателя
     * 
     * @return void
     */
    public function removeObserver(Observer $observer);


    /**
     * Метод оповещения наблюдателей
     * 
     * @return void
     */
    public function notifyObserver();
}
