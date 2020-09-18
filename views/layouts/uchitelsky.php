<?php
use yii\helpers\BaseUrl;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\search\SiteSearchForm;
use yii\widgets\ActiveForm;
use yii\widgets;

raoul2000\bootswatch\BootswatchAsset::$theme = 'cerulean';
AppAsset::register($this);
//$model=new SiteSearchForm();
$this->title = 'Преподаватель';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->beginPage() ?>
<?php//$this->registerCss('background-color:#0b3e6f');?>

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
    'brandLabel' => 'КАБИНЕТ ПРЕПОДАВАТЕЛЯ',
    // 'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);

echo Nav::widget([
    'options' => ['class' => 'nav nav-tabs nav-justified'],
    'items' => [

        ['label' => 'Управление задачами','visible'=> /*Yii::$app->user->identity->username=='Jelena',*/Yii::$app->user->can('teacher'),
            'items'=>[
                ['label' => 'Дисциплины', 'url' => ['/study_course/index']],
                ['label' => 'Модули', 'url' => ['/module/index']],
                ['label' => 'Уровни', 'url' => ['/level/index']],
                ['label' => 'Задачи', 'url' => ['/task/index']],
                ['label' => 'Ответы к задачам', 'url' => ['/correct_answer/index']],
            ]
        ],
        ['label' => 'Обучающиеся','visible'=> /*Yii::$app->user->identity->username=='Jelena',*/Yii::$app->user->can('dekanat'),
            'items'=>[
                ['label' => 'Направление(специальность)', 'url' => ['/profession/index']],
                ['label' => 'Курс обучения', 'url' => ['/course/index']],
                ['label' => 'Группы', 'url' => ['/stud_group/index']],
                ['label' => 'Обучающиеся', 'url' => ['/studying/index']],
            ]
        ],
        ['label' => 'Результаты','visible'=> /*Yii::$app->user->identity->username=='Jelena',*/Yii::$app->user->can('teacher'),
            'items'=>[
                ['label' => 'Баллы', 'url' => ['/score/index']],
                ['label' => 'Результаты за модуль', 'url' => ['/resultofmodule/index']],
                ['label' => 'Рейтинги', 'url' => ['/rating/index']],
            ]
        ],
        ['label' => 'На главную', 'url' => ['/site/index2']],
    ],
]);
NavBar::end();
?>

    <div class="container">

    <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Поиск">
        </div>
        <button type="submit" class="btn btn-default">Искать</button>
    </form>
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
