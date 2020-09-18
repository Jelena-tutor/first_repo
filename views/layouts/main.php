<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\BaseUrl;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
raoul2000\bootswatch\BootswatchAsset::$theme = 'cerulean';
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php
//Yii::$app()->clientScript->registerCssFile(Yii::$app()->baseUrl.'/css/index.css');
//$this->registerCss('background-color:#0b3e6f');
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' => 'ЗАДАЧИ ПО ПРОГРАММИРОВАНИЮ',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
   echo Nav::widget([
        'options' => ['class' => 'nav nav-tabs nav-justified'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index2']],
            ['label' => 'Задачи', 'url' => ['/post/show'],'visible' =>  !Yii::$app->user->isGuest],
            ['label' => 'Вход', 'url' => ['user/security/login'],'visible' =>  Yii::$app->user->isGuest],
            ['label' => 'Регистрация', 'url' => ['/user/registration/register'],'visible' =>  Yii::$app->user->isGuest],
            //['label' => 'Utilizatory', 'url' => ['/user/admin/'],'visible'=> Yii::$app->user->identity->username=='admin'],
            ['label' => 'Кабинет преподавателя','url' => ['/uchitel/index'],'visible'=> /*Yii::$app->user->identity->username=='Jelena',*/Yii::$app->user->can('teacher')],
            ['label' => 'Деканат','url' => ['/dekanat/index'],'visible'=> Yii::$app->user->can('dekanat')],
                /*'items'=>[
            ['label' => 'Дисциплины', 'url' => ['/study_course/index']],
            ['label' => 'Модули', 'url' => ['/module/index']],
            ['label' => 'Уровни', 'url' => ['/level/index']],
            ['label' => 'Задачи', 'url' => ['/task/index']],
            ['label' => 'Ответы к задачам', 'url' => ['/correct_answer/index']],
            ]
            ],
            ['label' => 'Обучающиеся','visible'=> /*Yii::$app->user->identity->username=='Jelena',*///Yii::$app->user->can('teacher'),
               /* 'items'=>[
                    ['label' => 'Направление(специальность)', 'url' => ['/profession/index']],
                    ['label' => 'Курс обучения', 'url' => ['/course/index']],
                    ['label' => 'Группы', 'url' => ['/stud_group/index']],
                    ['label' => 'Обучающиеся', 'url' => ['/studying/index']],
             ]
                ],
             ['label' => 'Результаты','visible'=> /*Yii::$app->user->identity->username=='Jelena',*///Yii::$app->user->can('teacher'),
                   /* 'items'=>[
                     ['label' => 'Баллы', 'url' => ['/score/index']],
                     ['label' => 'Результаты за модуль', 'url' => ['/score/index']],
                     ['label' => 'Рейтинги', 'url' => ['/score/index']],
               ]
               ],*/
            ['label'=>'Выход('.Yii::$app->user->identity->username.')',
                'url'=>['user/security/logout'],
                'linkOptions'=>['data-method'=>'post'],'visible'=>!Yii::$app->user->isGuest],
            ],


             ]);


        if(Yii::$app->user->can('permission_admin'))
            echo Nav::widget([
                'options' => ['class' => 'nav nav-tabs nav-justified'],
           'items'=>[
                   ['label'=>'Админ панель','url'=>['/admin']],
        ],
            ]);
           NavBar::end();
?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Задачи по программированию <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
?>