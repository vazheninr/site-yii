<?php
namespace app\components;
use yii\base\Widget;
use app\models\Category;
use Yii;

class MenuWidget extends Widget{
    
    public $tpl;
    public $data;//записи категорий из БД
    public $tree;//масив дерево
    public $menuHtml;//готовый код
    public $model;


    public function init() {
        parent::init();
        if ($this->tpl === null){
            $this->tpl = "menu";
        }
        $this->tpl .= '.php';
    }

   /* public function  run(){
          // get cache
        $menu = Yii::$app->cache->get('menu');
        if($menu) return $menu;

        $this->data = Category::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
         // set cache
        Yii::$app->cache->set('menu', $this->menuHtml, 60);
        return $this->menuHtml;
    }*/
     public function run(){
        // get cache
        if($this->tpl == 'menu.php'){
            $menu = Yii::$app->cache->get('menu');//получить из кеша
            if($menu) return $menu;
        }

        $this->data = Category::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        // set cache
        if($this->tpl == 'menu.php'){
            Yii::$app->cache->set('menu', $this->menuHtml, 60);//время хранения кеша
        }
        return $this->menuHtml;
    }
    protected function getTree(){//метод переводит обычный масив в дерево
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            if (!$node['parent_id']){
                $tree[$id] = &$node;
            }
            else{
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
            }
        }
        return $tree;
    }
    protected function getMenuHtml($tree, $tab = ''){
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category, $tab);
        }
        return $str;
    }

    protected function catToTemplate($category, $tab){
        ob_start();// буферезирует вывод и возвращает его не выводя его на экран
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}


