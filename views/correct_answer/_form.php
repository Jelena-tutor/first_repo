<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CorrectAnswer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="correct-answer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'task_id')->textInput() ?>

    <?= $form->field($model, 'input_1')->textInput() ?>

    <?= $form->field($model, 'input_2')->textInput() ?>

    <?= $form->field($model, 'input_3')->textInput() ?>

    <?= $form->field($model, 'correct_answer')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
