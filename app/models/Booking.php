<?php
/**
 * Project: megapoliscinema
 * Filename: Booking.php
 * Date: 05.09.2019
 * Time: 19:43
 */

namespace app\models;


use vendor\core\base\Model;

class Booking extends Model
{
    public $attributes = [
        'date' => '',
        'customers_idcustomer' => '',
        'sessions_idsession' => '',
        'cashiers_idcashier' => ''
    ];
}