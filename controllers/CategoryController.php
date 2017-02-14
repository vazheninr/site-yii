<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use app\models\Manufacturer;
use app\models\Shoe_size;
use app\models\Coment;
use Yii;
use yii\data\Pagination;

class CategoryController extends AppController {

    public function actionIndex() {
        $this->setMeta('Магазин обуви');
        $hits1 = Product::find()->with('category')->with('manufacturer')->with('coment')->where(['hit' => '1', 'm_w' => 0])->limit(12)->all();
        $hits2 = Product::find()->with('category')->with('manufacturer')->with('coment')->where(['hit' => '1', 'm_w' => 1])->limit(12)->all();
        $news1 = Product::find()->with('category')->with('manufacturer')->with('coment')->where(['new' => '1'])->limit(18)->all();
        $commet = Coment::find()->all();
        //$s_sizes = Shoe_size::find()->all();
        //debug($tmttt);
        return $this->render('index', [
                    'news1' => $news1,
                    'hits1' => $hits1,
                    'hits2' => $hits2,
                    'commet' => $commet,
                   // 's_sizes' => $s_sizes,
        ]);
    }

    public function actionView($id) {
      //  $id = Yii::$app->request->get('id');
        $id_cat = Category::find()->where(['id' => $id])->one(); //определим категория: родитель или потомок 
        if(empty($id_cat))//ПРОВЕРКА НА НАЛИЧИЕ КАТЕГОРИИ
            throw new \yii\web\HttpException(404, 'Такой категории нет');
        if ($id_cat->parent_id == 0) {//категория родитель
            if ($id_cat->id == 1) {
                $query = Product::find()->with('category')->with('manufacturer')->with('coment')->where(['m_w' => '0']);
            } else {
                $query = Product::find()->with('category')->with('manufacturer')->with('coment')->where(['m_w' => '1']);
            }
        } else {//категория потомок
            $query = Product::find()->with('category')->with('manufacturer')->with('coment')->where(['category_id' => $id]);
        }
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $commet = Coment::find()->all();
        $s_sizes = Shoe_size::find()->all();
        $category = Category::find()->where(['id' => $id])->one();
        $cat = $category->keywords;
        $this->setMeta('Магазин обуви | ' . $category->name_category, $category->keywords, $category->description);
       // debug($pages->pageSize);
        return $this->render('view', [
                    'hits1' => $products,
                    'commet' => $commet,
                    's_sizes' => $s_sizes,
                    'cat' => $cat,
                    'pages' => $pages,
                    'pageSize' => $pages->pageSize,
                    'totalCount' => $query->count(),
        ]);
    }

}
