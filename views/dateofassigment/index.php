<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\DateOfAssigmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Date Of Assigments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="date-of-assigment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Date Of Assigment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'module_id',
            'term',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
