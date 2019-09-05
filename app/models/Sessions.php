<?php
/**
 * Project: megapoliscinema
 * Filename: Sessions.php
 * Date: 05.09.2019
 * Time: 22:31
 */

namespace app\models;


use vendor\core\base\Model;

class Sessions extends Model
{
    public $attributes = [
        'sessiondate' => '',
        'sessiontime' => '',
        'movies_idmovie' => ''
    ];
}