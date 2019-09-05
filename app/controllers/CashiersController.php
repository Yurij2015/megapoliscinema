<?php
/**
 * Project: megapoliscinema
 * Filename: CashiersController.php
 * Date: 05.09.2019
 * Time: 21:25
 */

namespace app\controllers;

use app\models\Cashiers;
use vendor\core\App;

class CashiersController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {

        $cashiers = \R::findAll('cashiers');
        $menu = $this->menu;
        $title = "Кассиры";
        $this->set(compact('title', 'cashiers', 'menu'));
    }

    public function viewAction()
    {

    }

    public function createAction()
    {
        $title = "Добавление кассира";
        $menu = $this->menu;
        $this->set(compact('title', 'menu'));
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $cashiers = new Cashiers();
            $data = $_POST;
            $cashiers->load($data);
            if ($cashiers->save('cashiers')) {
                $_SESSION['success'] = 'Запись добавлена в базу данных';
            }
            redirect('cashiers');
        }
    }

}