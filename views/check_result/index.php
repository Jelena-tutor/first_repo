<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CheckResultSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Check Results';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="check-result-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Check Result', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'solution_id',
            'correct_answer_id',
            'answer',
            'result',
            //'score',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
