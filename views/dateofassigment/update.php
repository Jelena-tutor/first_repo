<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DateOfAssigment */

$this->title = 'Update Date Of Assigment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Date Of Assigments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="date-of-assigment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
