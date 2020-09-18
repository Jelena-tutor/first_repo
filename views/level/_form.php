<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Level */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="level-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'module_id')->dropDownList(\app\models\Module::find()->select(['name','id'])->indexBy('id')->column(),['prompt'=>'']) ?>

    <?= $form->field($model, 'name')->dropDownList(\app\models\Level::find()->select(['name','id'])->indexBy('id')->column(),['prompt'=>''])/*(['maxlength' => true])*/ ?>

    <?/*= $form->field($model, 'parent_id')->dropDownList(\app\models\Module::find()->select(['name','id'])->indexBy('id')->column(),['prompt'=>''])*/ ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
