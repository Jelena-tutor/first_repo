<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 17.11.2018
 * Time: 15:48
 */
namespace app\components\taskList;
//namespace app\assets;
use  yii\web\AssetBundle;

class TaskAssets extends AssetBundle
{
    public $sourcePath='@app/components/taskList/assets';

    public $css=["css/style.css"];
    public $js=["js/script.js"];

    public $jsOptions=[
        'position'=>\yii\web\View::POS_END,
    ];
  /*  public $depends=[
       'yii\assets\AppAsset',
    ];*/
    public $publishOptions=[
        'forceCopy'=>true,
    ];
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }


}
