<?php
/**
 * Project: megapoliscinema
 * Filename: Customers.php
 * Date: 05.09.2019
 * Time: 21:45
 */

namespace app\models;


use vendor\core\base\Model;

class Customers extends Model
{
    public $attributes = [
        'namecustomer' => '',
        'phonecustomer' => ''
    ];

}