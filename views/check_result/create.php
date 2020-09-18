<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CheckResult */

$this->title = 'Create Check Result';
$this->params['breadcrumbs'][] = ['label' => 'Check Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="check-result-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
