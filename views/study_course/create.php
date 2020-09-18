<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudyCourse */

$this->title = 'Create Study Course';
$this->params['breadcrumbs'][] = ['label' => 'Study Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="study-course-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
