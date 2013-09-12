<?php
/**
 * Created by JetBrains PhpStorm.
 * User: marian
 * Date: 03.09.13
 * Time: 22:37
 * To change this template use File | Settings | File Templates.
 */

error_reporting(E_ALL);
ini_set('display_errors', true);

require 'autoloader.php';

if (file_exists('./engine/core.class.php')) {
    $core = new engine\core();
    $core->showSite();
} else {
    require_once 'installer.php';
}
