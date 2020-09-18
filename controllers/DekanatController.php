<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 15.08.2018
 * Time: 15:32
 */

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
//use yii\web\Controller;
use yii\filters\VerbFilter;

class DekanatController extends AppController
{
    public $layout='dekanat';

    public function actionIndex(){

        return $this->render('index');

    }


}