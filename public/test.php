<?php
/**
 * Created by PhpStorm.
 * File: test.php
 * Date: 2019-08-29
 * Time: 22:14
 */

require 'rb.php';
$db = require '../config/configdb.php';
R::setup($db['dsn'], $db['user'], $db['pass']);
R::freeze(TRUE);
R::fancyDebug(TRUE);

var_dump(R::testConnection());
echo "<hr>";
//
//$category = R::dispense('category');
//$category->title = 'Категория 5';
//$id = R::store($category);
//var_dump($id);

//$category = R::load('category', 2);
////print_r($category);
//echo $category->title;
//echo "<hr>" . $category['title'];
//
//$category = R::load('category', 2);
//echo $category->title . '<br>';
//$category->title = 'Обновленная категория 2';
//R::store($category);
//echo $category->title;


//$category = R::load('category', 4);
//R::trash($category);

//$category = R::findAll('category', 'id > ?', [7]);

//$category = R::findOne('category', 'id = 5');
//echo '<pre>';
//print_r($category);


