<?php
/**
 * Project: megapoliscinema
 * Filename: Actors.php
 * Date: 05.09.2019
 * Time: 17:18
 */

namespace app\models;


use vendor\core\base\Model;

class Actors extends Model
{
    public $attributes = [
        'actorname' => '',
        'actorinfo' => ''
    ];
}