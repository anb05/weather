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
 * @author A.Bovkun <a.n.bovkun@gmail.com>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU 
 * Public License  GNU Public License
 *
 * @link http://localhost/index.php
 */

namespace Observer\Contrracts;


/**
 * Interface implement display information
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


interface DisplayElement
{
    /**
     * Интерфейс для реализации отображения информации
     *
     * @return void
     */
    public function display();
}
