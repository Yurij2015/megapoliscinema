<?php
/**
 * Created by PhpStorm.
 * File: Page.php
 * Date: 2019-08-24
 * Time: 18:26
 */

namespace app\controllers;


class PageController extends AppController
{

    public function viewAction()
    {
        debug($this->route);
        debug($_GET);
        echo 'Page:view';
    }

}