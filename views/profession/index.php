<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ProfessionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Направление/Специальность';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profession-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить специальность', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'id',
                'label'=>'номер'
            ],[
                'attribute'=>'profession',
                'label'=>'направление/специальность'
            ],
           // 'id',
           // 'profession',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
