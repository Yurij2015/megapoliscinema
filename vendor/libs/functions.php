<?php
/**
 * Created by PhpStorm.
 * File: functions.php
 * Date: 2019-08-24
 * Time: 14:44
 */
function debug($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function redirect($target) {

    $redirect ="/$target/";

    header("Location: $redirect");
    exit;
}