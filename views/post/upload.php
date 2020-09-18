<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 21.11.2018
 * Time: 11:05
 */
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>