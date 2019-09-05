<?php
/**
 * Project: megapoliscinema
 * Filename: GenresController.php
 * Date: 05.09.2019
 * Time: 21:58
 */

namespace app\controllers;


use app\models\Genres;

class GenresController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {

        $genres = \R::findAll('genres');
        $menu = $this->menu;
        $title = "Жанры";
        $this->set(compact('title', 'genres', 'menu'));
    }

    public function viewAction()
    {

    }

    public function createAction()
    {
        $title = "Добавление жанра";
        $menu = $this->menu;
        $this->set(compact('title', 'menu'));
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $genres = new Genres();
            $data = $_POST;
            $genres->load($data);
            if ($genres->save('genres')) {
                $_SESSION['success'] = 'Запись добавлена в базу данных';
            }
            redirect('genres');
        }
    }
}