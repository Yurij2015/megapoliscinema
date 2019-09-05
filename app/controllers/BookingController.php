<?php
/**
 * Project: megapoliscinema
 * Filename: BookingController.php
 * Date: 05.09.2019
 * Time: 19:43
 */

namespace app\controllers;


use app\models\Booking;

class BookingController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {

        $booking = \R::findAll('booking');
        $menu = $this->menu;
        $title = "Бронь";
        $this->set(compact('title', 'booking', 'menu'));
    }

    public function viewAction()
    {

    }

    public function createAction()
    {
        $title = "Добавление брони";
        $cashiers = \R::findAll('cashiers');
        $customers = \R::findAll('customers');
        $sessions = \R::findAll('sessions');

        $menu = $this->menu;
        $this->set(compact('title', 'cashiers', 'customers', 'sessions', 'menu'));
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $booking = new Booking();
            $data = $_POST;
            $booking->load($data);
            if ($booking->save('booking')) {
                $_SESSION['success'] = 'Запись добавлена в базу данных';
            }
            redirect('booking');
        }
    }
}