<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Profession */

$this->title = 'Добавить специальность';
$this->params['breadcrumbs'][] = ['label' => 'Специальность', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profession-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
