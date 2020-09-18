<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 20.11.2018
 * Time: 11:11
 */
use app\components\taskList\TaskWidget;
use app\components\MyWidget;
use app\assets\AppAsset;
use yii\helpers\Html;
use app\models\Task;
use app\models\Level;
use yii\base\Widget;

$this->title = 'Задание';
$this->params['breadcrumbs'][] = $this->title;
AppAsset::register($this);
?>

<?php MyWidget::begin()?>
<h2>Решите задачи</h2>
<?php MyWidget::end()?>

<?php /*вызываем наш виджет*/ echo TaskWidget::widget([
       'query'=>$sql,
       'headerText'=>'Уровень: легкий ',
    ]); ?>

