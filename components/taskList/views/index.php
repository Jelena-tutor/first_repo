<?php
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 17.11.2018
 * Time: 17:56
 **/
?>
<!--widget-->
<!--<div class="container">
    <div class="item"></div>
    <h1><?php //echo 'Обязательные задачи', $query->level->name; ?></h1>
    <div class="item"></div>
    </div>-->
<div class="row linkbox">
    <h2 class="h_style_decortion">
        <i class="fa fa-bookmark-o color-salat" aria-hidden="true"></i>
        <span class="h_Style_decoration_text"><?php echo  $header//, $q->level->name; ?></span>
    </h2>


    <?php foreach( $query as $q):?>
        <div class="col-md-3 col-sm-4 col-xs-6 linkbox-elem" data-link="">
            <div class="linkbox-elem-header">
                <?php echo Html::img("@web/images/inno.jpg",['alt'=>'','title'=>'','class'=>'linkbox-elem-img']);?>
            </div>
            <div class="linkbox-elem-footer">
                <p class="linkbox-elem-category">
                    <a href="<?php /*echo Url::toRoute(['level/index','alias'=>$q->level->alias]);*/?>"><?php echo $q->name;?></a>
                </p>
                <p class="linkbox-elem-title">
                    <a href="<?php echo Url::toRoute(['task/index'/*,'alias'=>'$q->alias'*/]);?>"><?php echo $q->text;?></a>
                </p>
                <p class="linkbox-elem-category">
                    <span><?php echo 'номер - ',$q->id;?></span>
                </p>
                <p class="linkbox-elem-data">
                    <span><?php echo 'баллы -  ', $q->points;?></span>
                </p>
                <p class="linkbox-elem-title">
                    <a href="<?php echo Url::toRoute(['post/test']);?>"><?php echo 'решать';?></a>
                </p>
            </div>
        </div>
    <?php endforeach;?>
</div>


