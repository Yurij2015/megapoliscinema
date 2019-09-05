<?php
/**
 * Project: megapoliscinema
 * Filename: MoviesController.php
 * Date: 05.09.2019
 * Time: 22:08
 */

namespace app\controllers;


use app\models\Movies;

class MoviesController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {

        $movies = \R::findAll('movies');
        $menu = $this->menu;
        $title = "Кинофильмы";
        $this->set(compact('title', 'movies', 'menu'));
    }

    public function viewAction()
    {

    }

    public function createAction()
    {
        $title = "Добавление фильма";
        $menu = $this->menu;
        $genres = \R::findAll('genres');
        $this->set(compact('title', 'menu', 'genres'));
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $movies = new Movies();
            $data = $_POST;
            $movies->load($data);
            if ($movies->save('movies')) {
                $_SESSION['success'] = 'Запись добавлена в базу данных';
            }
            redirect('movies');
        }
    }
}