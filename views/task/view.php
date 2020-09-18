<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Task */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Task', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'level_id',
            'teacher_id',
            'name',
            'text',
            'ability_to_skip',
            'points',
            'notice',
        ],
    ])
 ?>
<p>
    <?php echo Html::a('Добавить уровень',['level/create','task_id'=>$model->id],['class'=>'btn btn-primary'])?>
</p>
    <?= \yii\grid\GridView::widget([
     'dataProvider'=>new \yii\data\ActiveDataProvider(['query'=>$model->getLevel()]),
            'columns' => [
                'id',
                [
                   'attribute'=>'Module',
                   'label'=>'модуль',
                   // 'filter'=>\app\models\Module::find()->select(['name','id'])->indexBy('id')->column(),
                    'value'=>'module.name'
                ],
                [
                'attribute'=>'Level',
                'label'=>'уровень'    ,
                'value'=>'name'
                ],
                [ 'class' => 'yii\grid\ActionColumn',
                  'controller'=>'level',
                ],
            ],
    ]);
 ?>

</div>
