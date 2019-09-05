<?php
/**
 * Created by PhpStorm.
 * File: Main.php
 * Date: 2019-08-24
 * Time: 16:24
 */

namespace app\controllers;

use app\models\Main;
use vendor\core\App;
class MainController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {
        $model = new Main();

        $actors = \R::findAll('actors');
        $genres = \R::findAll('genres');
        $menu = $this->menu;

        $title = "Главная страница";
        $this->set(compact('title', 'actors', 'menu', 'genres'));

    }
}