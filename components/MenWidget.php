<?php
namespace app\components;
use yii\base\Widget;
use Yii;

class MenWidget extends Widget{
         
    public $tp;
    public $menuHtml;//готовый код

    public function init() {
        parent::init();
        if ($this->tp === null){
            $this->tp = "men";
        }
        $this->tp .= '.php';
    }

    public function  run(){
         // get cache
        $session =Yii::$app->session;
        $session->open();
        $this->menuHtml = $this->getMenuHtml($session);
        return $this->menuHtml;
    }
  
    protected function getMenuHtml($data){
        $str = '';
        $str .= $this->catToTemplate($data);
        return $str;
    }

    protected function catToTemplate($sess){
        ob_start();// буферезирует вывод и возвращает его не выводя его на экран
        include __DIR__ . '/menu_tp/' . $this->tp;
        return ob_get_clean();
    }
}
