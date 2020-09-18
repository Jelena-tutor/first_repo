<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResultOfModule */

$this->title = 'Update Result Of Module: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Result Of Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="result-of-module-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
