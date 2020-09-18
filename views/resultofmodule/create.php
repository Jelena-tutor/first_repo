<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ResultOfModule */

$this->title = 'Create Result Of Module';
$this->params['breadcrumbs'][] = ['label' => 'Result Of Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="result-of-module-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
