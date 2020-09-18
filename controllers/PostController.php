<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 15.08.2018
 * Time: 15:32
 */

namespace app\controllers;
use  yii\db\Expression;
use yii\base\InvalidConfigException;
use app\models\Task;
use app\models\Level;
//use app\models\Posts;
use Yii;
use app\models\TestForm;
use yii\web\Controller;
use app\models\UploadForm;
use yii\web\UploadedFile;

class PostController extends AppController
{
   public $layout='basic';

    public function actionIndex(){
        $sql=Task::find()->where(['level_id'=>1,'teacher_id'=>1])->limit(4)->orderBy(new \yii\db\Expression('rand()'))->all();
         //$sql=Task::find()->all();
        //$sql=Task::find()->orderBy(['id'=>SORT_DESC])->all();
        //$sql=Task::find()->asArray()->where(['level_id'=>1,'teacher_id'=>1])->all();
        //$sql=Task::find()->asArray()->all();
       // $sql = Task::find()->asArray()->where('level_id=5')->all();
        //$tas = Task::find()->asArray()->where(['like','text','перим'])->all();
        //$sql = Task::find()->asArray()->where(['<=','points','5'])->all();
        //$tas = Task::find()->asArray()->where('level_id=1')->limit(1)->all();
        //$tas = Task::find()->asArray()->where('level_id=1')->one();
        //$tas = Task::find()->asArray()->where('level_id=1')->count(1);
        //$tas = Task::find()->asArray()->count(1);
        //$tas = Task::findOne(['points'=>8]);
        //$tas = Task::findAll(['level_id'=>1]);
        //$query="SELECT*FROM task WHERE name LIKE '%пр%'";
        //$tas=Task::findBySql($query)->all();
        //$query="SELECT*FROM task WHERE name LIKE :us";
        //$tas=Task::findBySql($query,[':us'=>'%пр%'])->all();
        // $task=Task::findOne(1);
       //debug($sql);
        return $this->render('index',compact('sql'));
         //return $this->render('index');
    }

    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }


    public function actionTest()
    {
        if (Yii::$app->request->isAjax) {
            //debug($_POST);
            debug(Yii::$app->request->post());
            return 'test';
        }
        //TestForm::deleteAll(['>', 'id', 3]);
        $model = new TestForm();


        if ($model->load(Yii::$app->request->post())) {
            $model->studying_id = Yii::$app->user->identity->id;

            if ($model->save()) {
                // return $this->redirect(['test','id'=>$model->studying_id])
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

     return $this->render('test', compact('model'));
 //return $this->render('test', ['model' => $model]);*/

        }


    public function actionShow()
    {
        //$this->layout='basic';
        $this->view->title = 'Задачи';
        $this->view->registerMetaTag(['name'=>'keywords','content'=>'ключевики...']);
        $this->view->registerMetaTag(['name'=>'description','content'=>'описание страницы...']);
       /* {
            if (!\Yii::$app->user->can('student')) {
                throw new\ yii\web\ForbiddenHttpException('Доступ закрыт');
            }*/
        $levid=Task::find()->where(['level_id'=>1])->limit(3)->all();
        //debug($levid);
        return $this->render('show',compact('levid'));
    }


    public function actionMod_1_Level_2(){
        $sql=Task::find()->where(['level_id'=>2,'teacher_id'=>1])->limit(3)->orderBy(new \yii\db\Expression('rand()'))->all();
        //debug($sql);
        return $this->render('mod_1_level_2',compact('sql'));
    }
    public function actionMod_1_Level_3(){
        $sql=Task::find()->where(['level_id'=>1,'teacher_id'=>1])->limit(4)->orderBy(new \yii\db\Expression('rand()'))->all();
        //debug($sql);
        return $this->render('mod_1_level_3',compact('sql'));
    }
    public function actionMod_2_Level_1(){
        $sql=Task::find()->where(['level_id'=>1,'teacher_id'=>1])->limit(4)->orderBy(new \yii\db\Expression('rand()'))->all();
        //debug($sql);
        return $this->render('mod_2_level_1',compact('sql'));
    }
    public function actionMod_2_Level_2(){
        $sql=Task::find()->where(['level_id'=>1,'teacher_id'=>1])->limit(4)->orderBy(new \yii\db\Expression('rand()'))->all();
        //debug($sql);
        return $this->render('mod_2_level_2',compact('sql'));
    }

}