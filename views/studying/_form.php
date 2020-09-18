<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Studying */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studying-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stud_group_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
