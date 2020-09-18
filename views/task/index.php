<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Задачи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать задачу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            [
            'attribute'=>'level_id',
            //'label'=>'уровень',
            'filter'=>\app\models\Level::find()->select(['name','id'])->indexBy('id')->column(),
           'value'=>function(\app\models\Task $task){
                return $task->level->name;
           }
            ],

            [
                'attribute'=>'name',
                //'label'=>'название'
                ],
            [
                'attribute'=>'text',
                //'label'=>'содержание задачи'
            ],

            //'ability_to_skip',
            [
                'attribute'=>'points',
                //'label'=>'баллы за решение'
            ],
            [
                'attribute'=>'ability_to_skip',
               // 'label'=>'обязательна'
            ],
                //'attribute'=>'notice',
            [
                'attribute'=>'teacher_id',
                //'label'=>'id учителя'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
