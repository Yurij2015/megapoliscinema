<?php
/**
 * Created by PhpStorm.
 * File: Controller.php
 * Date: 2019-08-24
 * Time: 18:12
 */

namespace vendor\core\base;


abstract class Controller
{
    /*
     *  Текущий маршрут и параметры (controller, action, params)
     */
    public $route = [];

    public $view;
    public $layout;

    /*
     * пользовательские даные
     * @vars array
     */
    public $vars = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }

    public function set($vars)
    {
        $this->vars = $vars;
    }

}