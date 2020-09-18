<?php

use app\components\MenuWidget;
use app\components\MyWidget;
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
$this->title = 'Задачи';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->beginBlock('block1');?>
    <h1>Задачи</h1>
<h4>Выбери модуль и уровень</h4>
<?php $this->endBlock();?>

<?php MyWidget::begin()?>

<?php MyWidget::end()?>
<?php //echo MyWidget::widget(['name'=>'Вася']);?>
<?php /*foreach ($tas as $ta){
    echo $ta['name']."<br>";
}*/
?>
<ul class="catalog"></ul>
<?php echo \app\components\MenuWidget::widget(['tpl'=>'menu'])?>
