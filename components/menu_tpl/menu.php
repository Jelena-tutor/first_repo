<?php
use yii\helpers\Url;
?>
<li <?php echo isset($level['childs'])? 'class="has-child"' : '' ?>>
    <a href="<?php echo Url::to(['post/index',$level['link']])?>">
        <?php echo $level['name']?>
    </a>

    <?php if (isset($level['childs'])):?>
    <ul class="children">
        <?php endif;?>

        <?php if(isset($level['childs'])):?>
        <?php echo $this->getMenuHtml($level['childs'])?>
    </ul>
<?php endif;?>
</li>








