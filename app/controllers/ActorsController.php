<?php
/**
 * Created by PhpStorm.
 * File: Page.php
 * Date: 2019-08-24
 * Time: 18:26
 */

namespace app\controllers;

use app\models\Actors;
use vendor\core\App;

class ActorsController extends AppController
{

    // public $layout = 'main';

    public function indexAction()
    {

        $actors = \R::findAll('actors');
        $menu = $this->menu;
        $title = "Актеры";
        $this->set(compact('title', 'actors', 'menu'));
    }

    public function viewAction()
    {

    }

    public function createAction()
    {
        $title = "Добавление актера";
//        $this->set(compact('title'));
        $menu = $this->menu;
        $this->set(compact('title', 'actors', 'menu'));
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $actor = new Actors();
            debug($actor);
            debug($_POST);
            die;
        }
    }


}