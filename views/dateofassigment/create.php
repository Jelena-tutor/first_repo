<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DateOfAssigment */

$this->title = 'Create Date Of Assigment';
$this->params['breadcrumbs'][] = ['label' => 'Date Of Assigments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="date-of-assigment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
