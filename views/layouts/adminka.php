<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
raoul2000\bootswatch\BootswatchAsset::$theme = 'simplex';
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php
//Yii::$app()->clientScript->registerCssFile($this->assetsUrl.'/css/styles.css');
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
        'brandLabel' => 'Админка',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'nav nav-tabs nav-justified'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index2']],
            ['label' => 'Управление пользователями', 'url' => ['/admin/'],'visible' =>  !Yii::$app->user->isGuest],
            ['label' => 'Вход', 'url' => ['user/security/login'],'visible' =>  Yii::$app->user->isGuest],
            ['label' => 'Регистрация', 'url' => ['/user/registration/register'],'visible' =>  Yii::$app->user->isGuest],
            //['label' => 'Utilizatory', 'url' => ['/user/admin/'],'visible'=> Yii::$app->user->identity->username=='admin'],
            ['label'=>'Выход('.Yii::$app->user->identity->username.')',
                'url'=>['user/security/logout'],
                'linkOptions'=>['data-method'=>'post'],'visible'=>!Yii::$app->user->isGuest],
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