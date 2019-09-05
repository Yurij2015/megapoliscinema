<?php
/**
 * Project: megapoliscinema
 * Filename: SessionsControllerr.php
 * Date: 05.09.2019
 * Time: 22:30
 */

namespace app\controllers;


use app\models\Sessions;

class SessionsController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {

        $sessions = \R::findAll('sessions');
        $menu = $this->menu;
        $title = "Сеансы";
        $this->set(compact('title', 'sessions', 'menu'));
    }

    public function viewAction()
    {

    }

    public function createAction()
    {
        $title = "Добавление сеантса";
        $menu = $this->menu;
        $movies = \R::findAll('movies');
        $this->set(compact('title', 'menu', 'movies'));
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $sessions = new Sessions();
            $data = $_POST;
            $sessions->load($data);
            if ($sessions->save('sessions')) {
                $_SESSION['success'] = 'Запись добавлена в базу данных';
            }
            redirect('sessions');
        }
    }
}