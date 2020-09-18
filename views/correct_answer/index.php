<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CorrectAnswerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Correct Answers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correct-answer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Correct Answer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'task_id',
            'input_1',
            'input_2',
            'input_3',
            //'correct_answer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
