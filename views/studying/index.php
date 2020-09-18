<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\StudyingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Обучающиеся';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studying-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый ученик', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'stud_group_id',
                'label'=>'номер группы'
            ],[
                'attribute'=>'user_id',
                'label'=>'номер обучающегося'
            ],
            //'id',
            //'stud_group_id',
            //'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
