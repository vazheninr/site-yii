<?php
namespace app\components;
use yii\base\Widget;
use app\models\Manufacturer;
use Yii;

class Menu1Widget extends Widget{
    
    public $tpl1;
    public $data;//записи категорий из БД
    public $menuHtml;//готовый код
    public $model;


    public function init() {
        parent::init();
        if ($this->tpl1 === null){
            $this->tpl1 = "menu1";
        }
        $this->tpl1 .= '.php';
    }

    public function  run(){
         // get cache
        $menu1 = Yii::$app->cache->get('menu1');
        if($menu1) return $menu1;
        
        $this->data = Manufacturer::find()->indexBy('id')->asArray()->all();
        //debug($this->data);
        $this->menuHtml = $this->getMenuHtml($this->data);
        // set cache
        Yii::$app->cache->set('menu1', $this->menuHtml, 60);
        return $this->menuHtml;
    }
  
    protected function getMenuHtml($data, $tab = ''){
        $str = '';
        foreach ($data as $manufacturer) {
            $str .= $this->catToTemplate($manufacturer, $tab);
        }
        return $str;
    }

    protected function catToTemplate($manufacturer, $tab){
        ob_start();// буферезирует вывод и возвращает его не выводя его на экран
        include __DIR__ . '/menu_tpl1/' . $this->tpl1;
        return ob_get_clean();
    }
}



