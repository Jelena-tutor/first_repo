<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudyCourse */

$this->title = 'Update Study Course: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Study Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="study-course-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
