<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 24.10.2018
 * Time: 3:32
 */
namespace app\components;
use app\models\Level;
use yii\base\Widget;
use Yii;

class MenuWidget extends Widget{
    public $tpl;
    public $model;
    public $data;//Массив уровней
    public $tree;//Массив дерево
    public $menuHtml;//Готовый код либо список ul либо список select

    public function init()
    {
        parent::init();
        if($this->tpl===null){
            $this->tpl='menu';
        }
        $this->tpl .='.php';
    }

    public function run(){
       //get cache
        if($this->tpl=='menu.php'){
            $menu=Yii::$app->cache->get('menu');
            if($menu)return $menu;
        }
        $this->data = Level::find()->indexBy('id')->asArray()->all();
        $this->tree=$this->getTree();
        $this->menuHtml=$this->getMenuHtml($this->tree);
        //debug($this->tree);
        //set cache
        If($this->tpl===null){
            Yii::$app->cache->set('menu',$this->menuHtml,60);
        }
          return $this->menuHtml;
      }
    protected function getTree(){
        $tree = [];
        //$url=[];
        foreach ($this->data as $id=>&$node){
            if (!$node['parent_id'])
                $tree[$id] = &$node;
                //$tree[$id]['link']=&$node['url'];
               // $url[]=&$node['keywords'];
            else
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
                //$this->data[$node['parent_id']][$node['id']]['link']=$this->data[$node['parent_id']]['url'].'/'. $node['url'];
                //$url[]=&$node['url'];
        }
        return $tree;
    }
    protected function getMenuHtml($tree,$tab=''){
        $str='';
        foreach ($tree as $level){
            $str .= $this->levelToTemplate($level,$tab);
        }
        return $str;
    }
    protected function levelToTemplate($level,$tab){
        ob_start();
       include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}
