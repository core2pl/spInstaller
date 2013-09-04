<?php
/**
 * Created by JetBrains PhpStorm.
 * User: marian
 * Date: 03.09.13
 * Time: 22:45
 * To change this template use File | Settings | File Templates.
 */

function spAutoload($class) {
    if ($class == 'engine\PDO') return;
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__.DIRECTORY_SEPARATOR.$class.'.class.php';
    $file_alt = __DIR__.DIRECTORY_SEPARATOR.$class.'.php';	
    if (is_file($file) || is_file($file_alt)) {
        require $file;
        return true;
    }
    throw new Exception('Class '.$class.' not found!');
}

spl_autoload_register('spAutoload');

