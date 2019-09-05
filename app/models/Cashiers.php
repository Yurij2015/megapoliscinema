<?php
/**
 * Project: megapoliscinema
 * Filename: Cashiers.php
 * Date: 05.09.2019
 * Time: 21:25
 */

namespace app\models;


use vendor\core\base\Model;

class Cashiers extends Model
{
    public $attributes = [
        'cashiername' => '',
        'cashierphone' => '',
        'cashieraddres' => ''
    ];

}