<?php
/**
 * Learn Design Patterns 
 * Файл содержаший набор функций, обеспечивающих функционирование приложения:
 *     автозагрузку;
 *
 * PHP version 7.0.1
 *
 * @category Learn
 *
 * @package Duck
 *
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
 */

/**
 * Автозагрузчик классов
 *
 * @param string $class clss namespace
 *
 * @return string path to file class
 */
function autoload($class)
{
    $dirName = explode("\\", $class);
    unset($dirName[0]);

    $path = realpath(
        __DIR__ . "/../" . DIRECTORY_SEPARATOR .
        implode(DIRECTORY_SEPARATOR, $dirName) .
        ".php"
    );

    if (is_file($path)) {
        include_once $path;
    } else {
        return false;
    }
}

spl_autoload_register('autoload');

