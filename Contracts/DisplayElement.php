<?php

/**
 * Общий интерфейс для реализации отображения информации элемента
 *
 * PHP version 7.0.1
 *
 * @category Learn
 *
 * @package Observer\Contrracts
 *
 * @author Anb05 <alexandr05@list.ru>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link https://github.com/anb05/weather.git
 */

namespace Observer\Contrracts;


/**
 * Interface implement display information
 *
 * @category Contract
 *
 * @package Observer\Contrracts
 *
 * @author Anb05 <alexandr05@list.ru>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link https://github.com/anb05/weather.git
 */


interface DisplayElement
{
    /**
     * Интерфейс для реализации отображения информации
     *
     * @return void
     */
    public function display();
}
