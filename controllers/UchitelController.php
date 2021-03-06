<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 15.08.2018
 * Time: 15:32
 */

namespace app\controllers;

use app\models\search\SiteSearchForm;
use app\models\Task;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
//use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Html;


class UchitelController extends AppController
{
    public $layout='uchitelsky';


    public function beforeAction($action)
    {
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
        $model=new  SiteSearchForm();
        if($model->load(Yii::$app->request->post())&& $model->validate()){
            $q=Html::encode($model->q);
            return $this->redirect(Yii::$app->urlManager->createUrl(['site/search','q'=>$q]));
        }
            return true;
    }

    public function actionSearch(){
        $q=Yii::$app->getRequest()->getQueryParam('q');
        $query=Task::find()->where(['hide'=>0])->where(['like','full_text',$q]);
        $pagination=new Pagination([
            'defaultPageSize'=>3,
            'totalCount'=>$query->count()
        ]);
        $task=$query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        Task::setNumbers($task);
        return $this->render('search',[
            'task'=>$task,
            'q'=>$q,
            'pagination'=>$pagination
         ]);
    }


    public function actionIndex(){

        return $this->render('index');

    }


}