<?php
/**
 * Created by PhpStorm.
 * File: PostsNew.php
 * Date: 2019-08-24
 * Time: 16:29
 */

namespace app\controllers;

class PostsNewController extends AppController
{

    public function indexAction()
    {
        echo 'PostsNew::index';
    }

    public function testAction()
    {
        debug($this->route);
        echo 'PostsNew::test';

    }

    public function testPageAction()
    {
        echo 'PostsNew::testPage';
    }

    public function before()
    {
        echo 'PostsNew::before';
    }

}