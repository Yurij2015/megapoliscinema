<?php
/**
 * Created by PhpStorm.
 * File: Main.php
 * Date: 2019-08-24
 * Time: 16:24
 */

namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {
        $model = new Main();
//        $res = $model->query("CREATE TABLE posts (id int primary key auto_increment, name varchar(50), content varchar(250))");
        $posts = $model->findAll();
        //$post = $model->findOne(2);
//        $data = $model->findBySql("SELECT * FROM $model->table ORDER BY id DESC LIMIT 2");
//        $data = $model->findBySql("SELECT * FROM $model->table WHERE name LIKE ?", ['%whe%']);
        $data = $model->findLike('we', 'name');
        debug($data);

        $this->set(compact('posts'));

    }
}