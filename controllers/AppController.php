<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 15.08.2018
 * Time: 15:21
 */

namespace app\controllers;

use yii\web\Controller;
class AppController extends  Controller
{
    public function debug($arr)
    {

        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}
