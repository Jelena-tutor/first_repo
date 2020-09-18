<?php

$params = require(__DIR__ . '/params.php');

$config = array(
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => array('log'),
    'language'=>'ru',


    'modules'=>[
        'admin2'=>[
            'class'=> 'app\modules\admin\MyAdmModule'
        ],
        'user'=>[
            'class'=>'dektrium\user\Module',
            'enableUnconfirmedLogin'=>true,
            'confirmWithin'=>21600,
            'cost'=>12,
            'admins'=>['admin'],
        ],
        'admin'=>[
            'class'=>'mdm\admin\Module',
            'menus' => [
                'user' => null,],
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    /* 'userClassName' => 'app\models\User', */
                  'idField' => 'user_id',
                  'usernameField' => 'username',
                ],
                ],
            'layout' => 'left-menu',
            'mainLayout' => '@app/views/layouts/adminka.php',
            ]
        ],

    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            '/site/*',
            //'user/*',
           //'debug/*',
            //'some-controller/some-action',
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
             ]
        ],

       /*'rbac'=>[
            'class'=>'dektrium\rbac\RbacWebModule',
            ],*/
        /*'authManager'=>[
            'class'=>'yii\rbac\DbManager'
        ],*/

    //'layout'=>'basic',
	/*'layout'=>'dmstr',
'layoutPath'=>'@app/themes/adminLTE/layouts',*/
   'components' => array(
        /*'user'=>[
            'identityClass'=>'mdm\admin\models\User',
            'loginUrl'=>['admin/user/login'],
        ],*/

        /*'authManager' => [
            'class' => 'dektrium\rbac\components\DbManager',
        ],*/
       /* 'assetManager'=>[
            'class'=>'yii\web\AssetManager',
            'appendTimestamp'=>false,
        ],*/
       'cart'=>[
           'class'=>'yii2mod\cart\Cart',
           'storageClass'=>[
               'class'=>'yii2mod\cart\storage\DatabaseStorage',
               'deleteIfEmpty'=>true
           ]
       ],
        'thumbnailer' => [
           'class' => 'daxslab\thumbnailer\Thumbnailer',
       ],

        'request' => array(
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'aAj5mFj_6ahjkDH8gacveyCyUhyhW1Vf',
        ),
        'cache' => array(
            'class' => 'yii\caching\FileCache',
        ),
        /*'user' => array(
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ),*/
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'mailer' => array(
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ),
        'log' => array(
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => array(
                array(
                    'class' => 'yii\log\FileTarget',
                    'levels' => array('error', 'warning'),
                ),
            ),
        ),

        'db' => require(__DIR__ . '/db.php'),

       /* 'urlManager' => [
            'enablePrettyUrl' => 'true',],
            'showScriptName' => false,
            'rules' => [
                ],*/
        'authManager'=>[
        'class'=>'yii\rbac\DbManager',
            'defaultRoles'=>[
                'student'
            ]
         ],
    ),
    'params' => $params,
);

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
    //$config['components']['assetManager']['forceCopy']=true;

	/*'generators' => [ //here
'crud' => [ // generator name
'class' => 'yii\gii\generators\crud\Generator', // generator class
'templates' => [ //setting for out templates
'custom' => '@app/vendor/yiisoft/yii2-gii/generators/crud/custom', // template name => path to template
]
]
],*/	

}

return $config;
