<?php

/**
 * Интерфейс Наблюдателя патерна "Наблюдатель" (Observer)
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


interface Observer
{
    /**
     * Метод регистрации наблюдателя
     *
     * @param float $temp     текущая температура
     * @param float $humidity текущая влажность.
     * @param float $pressure текущая давление.
     * 
     * @return void
     */
    public function update(float $temp, float $humidity, float $pressure);
}
