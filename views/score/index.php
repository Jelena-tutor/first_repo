<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ScoreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Баллы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="score-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить баллы', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'task_id',
                'label'=>'номер задачи'
            ],
            [
                'attribute'=>'studying_id',
                'label'=>'номер обучающегося',
                //'filter'=>\app\models\Profession::find()->select(['profession','id'])->indexBy('id')->column(),
                //'value'=>'profession.profession'
            ],
            [
                'attribute'=>'points',
                'label'=>'баллы'
            ],
           // 'id',
           // 'task_id',
           // 'studying_id',
           //'points',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
