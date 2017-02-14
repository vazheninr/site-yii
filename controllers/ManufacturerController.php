<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use app\models\Manufacturer;
use app\models\Shoe_size;
use app\models\Coment;
use Yii;
use yii\data\Pagination;

class ManufacturerController extends AppController {


    public function actionView($id) {
       // $id = Yii::$app->request->get('id');
        $id_man = Manufacturer::find()->where(['id' => $id])->one(); //определим категория: родитель или потомок 
        if(empty($id_man))//ПРОВЕРКА НА НАЛИЧИЕ производителя
            throw new \yii\web\HttpException(404, 'Такого производителя нет');
        $query = Product::find()->with('category')->with('manufacturer')->with('coment')->where(['manufacturer_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $commet = Coment::find()->all();
        $s_sizes = Shoe_size::find()->all();
        $category = Category::find()->where(['id' => $id])->one();
        $cat = $category->keywords;
        $this->setMeta('Магазин обуви | ' . $category->name_category, $category->keywords, $category->description);
        //debug($tmttt);
        return $this->render('view', [
                    'hits1' => $products,
                    'commet' => $commet,
                    's_sizes' => $s_sizes,
                    'cat' => $cat,
                    'pages' => $pages,
        ]);
    }

}


