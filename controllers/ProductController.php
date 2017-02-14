<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use app\models\Manufacturer;
use app\models\Shoe_size;
use app\models\Coment;
use app\models\More_foto;
use Yii;


class ProductController extends AppController{

        public function  actionView($id){
       // $id = Yii::$app->request->get('id');
       
        $model = new Coment();// запись коментария
        $model->load(Yii::$app->request->post());
        $model->save();
        
        //определим какая обувь муская или женская
        $hits1 = Product::find()->with('category')->with('manufacturer')->with('coment')->where(['id' => $id])->limit(1)->one();
        if(empty($hits1))//ПРОВЕРКА НА НАЛИЧИЕ продукта
            throw new \yii\web\HttpException(404, 'Такого продукта нет');
        $hits = Product::find()->with('category')->with('manufacturer')->with('coment')->where(['hit' => '1', 'category_id' => $hits1->category_id])->limit(12)->all();
        $commet = Coment::find()->all();
       // $s_sizes = Shoe_size::find()->where(['prod_id' => $id])->all();
      //  $more_foto = More_foto::find()->where(['id_product' => $id])->all();
      //  $count_more_foto = More_foto::find()->where(['id_product' => $id])->count();
        $cat = $hits1->category->keywords;
        $this->setMeta('Магазин обуви | ' . $hits1->category->name_category, $hits1->category->keywords, $hits1->category->description);
        return $this->render('view', [
            'hit1' => $hits1,
            'commet' => $commet,
           // 's_sizes' => $s_sizes,
            'cat' => $cat,
          //  'more_foto' => $more_foto,
           // 'count_more_foto' => $count_more_foto,
            'hits' => $hits,
        ]);
    }
} 


