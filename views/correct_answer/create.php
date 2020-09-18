<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CorrectAnswer */

$this->title = 'Create Correct Answer';
$this->params['breadcrumbs'][] = ['label' => 'Correct Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correct-answer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
