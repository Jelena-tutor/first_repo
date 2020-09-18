<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 18.11.2018
 * Time: 19:59
 */
$this->title="Поиск $q";

$this->registerMetaTag([
    'name'=>'description',
    'content'=>"Поиск: $q";
]);
$this->registerMetaTag([
    'name'=>'keywords',
    'content'=>$q
])
?>
<?php if($q==""){?>
    <h2>Вы задали пустой запрос!</h2>
<?php } else { ?>
    <h2>Результаты поиска: <?php echo $q ?></h2>
    <?php if (!$task) { ?>
        <h2>Ничего не найдено</h2>
    <?php } else { ?>
        <?php foreach ($task as $tas)include "intro_post.php"; ?>
        <br/>
        <hr/>
        <div id="pages">
        <?php echo \yii\widgets\LinkPager::widget([
            'pagination'=>$pagination,
            'firstPageLabel'=>'',
            'lastPageLabel'=>'',
            'prevPageLable'=>'&laquo';
    ])?>
    <span>Страница<?php $active_page ?>из<?php echo $count_pages ?></span>
    <div class="clear"></div>
</div>
<?php } ?>



<div id ="search">
    <div id ="search_div">
    	<h3>Поиск по сайту</h3>
    	<?php $url = $this->getController()->createUrl('material/search'); ?>
		<?php echo Html::beginForm($url); ?>
		<div class="row">
		<?php echo Html::activeTextField($form,'string') ?>
		<?php echo Html::error($form,'string'); ?>
		<?php echo Html::SubmitButton('Поиск'); ?>
		</div>
		<?php echo Html::endForm(); ?>
    </div>
    <div id="SearchFooter"></div>
</div>
