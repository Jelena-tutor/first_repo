<?php
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div class="wrap">
<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills ">
                <li role="presentation" class="nav-item nav-link "><?echo html::a(Главная,['/site/index2'])?> </li>
                <li role="presentation" class="nav-item nav-link "data-toggle="pill"><?=html::a(Задачи,['post/show'])?> </li>
                <li role="presentation" class="nav-item nav-link " data-toggle="pill"><?=html::a(Задание,['post/index'])?></li>
                <li role="presentation" class="nav-item nav-link " data-toggle="pill"><?=html::a(Решение,['post/test'])?></li>
            </ul>

         <?php if(isset($this->blocks['block1'])); ?>
        <?php echo $this->blocks['block1'] ?>

            <?= $content ?>
        </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>