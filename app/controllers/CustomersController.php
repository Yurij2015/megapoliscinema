<?php
/**
 * Project: megapoliscinema
 * Filename: CustomersController.php
 * Date: 05.09.2019
 * Time: 21:45
 */

namespace app\controllers;


use app\models\Customers;

class CustomersController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {

        $customers = \R::findAll('customers');
        $menu = $this->menu;
        $title = "Посетители";
        $this->set(compact('title', 'customers', 'menu'));
    }

    public function viewAction()
    {

    }

    public function createAction()
    {
        $title = "Добавление посетителя";
        $menu = $this->menu;
        $this->set(compact('title', 'menu'));
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $customer = new Customers();
            $data = $_POST;
            $customer->load($data);
            if ($customer->save('customers')) {
                $_SESSION['success'] = 'Запись добавлена в базу данных';
            }
            redirect('customers');
        }
    }
}