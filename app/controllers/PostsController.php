<?php
/**
 * Created by PhpStorm.
 * File: Posts.php
 * Date: 2019-08-24
 * Time: 16:24
 */

namespace app\controllers;


class PostsController extends AppController
{

    public function indexAction()
    {
        echo 'Posts::index';
    }

    public function testAction()
    {
        debug($this->route);
        echo 'PostsNew::test';

    }

}