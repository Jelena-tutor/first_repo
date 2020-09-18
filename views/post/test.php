<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use yii\jui\DatePicker;

$this->title = 'Решение';
$this->params['breadcrumbs'][] = $this->title;

?>
<h1>Отправьте решение</h1>

<?php if(Yii::$app->session->hasFlash('success')):?>
    <?php //echo Yii::$app->session->getFlash('success');?>
    <div class="alert alert-success" role="alert">
           <?php echo Yii::$app->session->getFlash('success');?>
    </div>

<?php endif;?>


<?php if(Yii::$app->session->hasFlash('error')):?>
    <?php //echo Yii::$app->session->getFlash('error');?>
    <div class="alert alert-danger" role="alert">
          <?php echo Yii::$app->session->getFlash('error');?>
    </div>

<?php endif;?>

<?php $form = ActiveForm::begin(['id'=>'Форма для записи решения',
    'options'=>['style'=>'width:60%']]);?>

<?//= $form->field($model, 'level_id')->dropDownList(\app\models\Level::find()->select(['name','id'])->indexBy('id')->column(),['prompt'=>'']) ?>

<?//= $form->field($model, 'teacher_id')->dropDownList(\app\models\Teacher::find()->select(['name','id'])->indexBy('id')->column()) ?>

<?php //echo $form->field($model,'name')->label('Имя')?>
<?php //echo $form->field($model,'studying_id')->textInput()?>
<?php echo $form->field($model,'task_id')->textInput()?>
<?php //echo $form->field($model,'created_at')->textInput()?>
<?php //echo $form->field($model,'studying_id')->$session->get('id')?>

<?= $form->field($model,'time_to_send')->widget(\yii\jui\DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd']) ?>
<?/* echo
    $form->field($model,'text')->widget(CKEditor::className(),[
            'editorOptions'=>[
                    'preset'=>'full',
                'inline'=>false
            ]
    ]);*/
?>
<?php  echo $form->field($model,'solution')->/*textInput(['maxlength'=>2000])*/textarea(['rows'=>12])?>
<?php echo Html::submitButton('Отправить',['class'=>'btn btn-success'])?>
<?php ActiveForm::end()?>




