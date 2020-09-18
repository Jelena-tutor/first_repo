<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Score */

$this->title = 'Записать баллы';
$this->params['breadcrumbs'][] = ['label' => 'Баллы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="score-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
