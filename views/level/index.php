<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LevelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Уровни';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="level-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать уровень', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            //'module_id',
            [
            'attribute'=>'module_id',
            'filter'=>\app\models\Module::find()->select(['name','id'])->indexBy('id')->column(),
            'value'=>'module.name'
            ],
            'name',
           // 'parent_id',
           /* [
            'attribute'=>'parent_id',
            'filter'=>\app\models\Level::find()->select(['name','id'])->indexBy('id')->column(),
            'value'=>function(\app\models\Level $level){
               return $level->parent_id->name;

            },
             ],*/


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
