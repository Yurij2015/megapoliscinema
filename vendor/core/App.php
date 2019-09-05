<?php
/**
 * Project: megapoliscinema
 * Filename: App.php
 * Date: 05.09.2019
 * Time: 15:22
 */

namespace vendor\core;

use vendor\core\Registry;

class App
{
    public static $app;

    public function __construct()
    {
        self::$app = Registry::instance();
    }
}