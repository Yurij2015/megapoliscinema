<?php
/**
 * Project: megapoliscinema
 * Filename: Movies.php
 * Date: 05.09.2019
 * Time: 22:08
 */

namespace app\models;


use vendor\core\base\Model;

class Movies extends Model
{
    public $attributes = [
        'moviename' => '',
        'moviedescription' => '',
        'duration' => '',
        'genres_idgenre' => ''
    ];

}