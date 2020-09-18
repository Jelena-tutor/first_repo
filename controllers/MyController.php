<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 14.08.2018
 * Time: 17:12
 */

namespace app\controllers;


class MyController extends AppController
{
    public function actionIndex(){
        return $this ->render('index');
    }

}