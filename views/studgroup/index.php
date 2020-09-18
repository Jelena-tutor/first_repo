<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\StudGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stud Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stud-group-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stud Group', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'course_id',
            'number_group',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
