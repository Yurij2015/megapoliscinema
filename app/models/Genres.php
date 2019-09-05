<?php
/**
 * Project: megapoliscinema
 * Filename: Genres.php
 * Date: 05.09.2019
 * Time: 21:59
 */

namespace app\models;


use vendor\core\base\Model;

class Genres extends Model
{
    public $attributes = [
        'genrename' => '',
        'genredescription' => ''
    ];
}