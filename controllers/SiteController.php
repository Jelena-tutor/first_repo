<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
//use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class SiteController extends AppController
{
    /**
     * @inheritdoc
     */


    /**
     * @inheritdoc
     */

 public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['/user/user/security/login','/user/registration/register'],
                'rules' => [


                    [
                        //'actions' => ['view', 'search'],
                        'actions'=>['/user/user/security/login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        //'actions' => ['view', 'search'],
                        'actions'=>['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                       // 'roles' => ['?', '@', 'admin'],
                    ],

                ],
            ],
        ];
    }



    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->view->registerCssFile('css/my.css');
        return $this->render('index');

    }

    /**
     * Login action.
     *
     * @return string
     */

    public function actionIndex2()
    {
       // $this->view->registerCssFile('css/my.css');
        return $this->render('index2');

    }

    /**
     * Login action.
     *
     * @return string
     */

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();/*redirect(Yii::$app->user->loginUrl);*/
    }
/*public function beforeAction($action)
{
if (parent::beforeAction($action)) {
// change layout for error action
if ($action->id=='login')
$this->layout = 'login';
return true;
} else {
return false;
}
}*/
    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        if (!\Yii::$app->user->can('student')) {
            return $this->render('about');
        }
        throw new\ yii\web\ForbiddenHttpException('Доступ закрыт');
    }

    public function actionHello()
	{
	return $this->render('hello');

	}
    public function actionHello2()
    {
        return $this->render('hello2');
    }

}