<?php
/**
 * Created by PhpStorm.
 * File: AppControllerController.php
 * Date: 2019-08-26
 * Time: 18:39
 */

namespace app\controllers;


use app\models\Main;
use vendor\core\base\Controller;

class AppController extends Controller
{

    public $menu;

    public function __construct($route)
    {
        parent::__construct($route);
        new Main;
        $this->menu = \R::findAll('menu');
    }

}