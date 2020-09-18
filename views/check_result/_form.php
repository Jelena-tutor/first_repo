<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CheckResult */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="check-result-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'solution_id')->textInput() ?>

    <?= $form->field($model, 'correct_answer_id')->textInput() ?>

    <?= $form->field($model, 'answer')->textInput() ?>

    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
