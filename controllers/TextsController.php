<?php

namespace app\controllers;

use app\models\Texts;
use Yii;
use yii\data\Pagination;

class TextsController extends AppController {


    public function actionView($id) {
       // $id = Yii::$app->request->get('id');
        
        $view = Texts::find()->where(['id' => $id])->one(); //
  /*      if(empty($view))//ПРОВЕРКА НА НАЛИЧИЕ текста
            throw new \yii\web\HttpException(404, 'Страница не существует');
*/
        $this->setMeta('Магазин обуви | ' . $view->name, $view->name, $view->name);
        //debug($tmttt);
        return $this->render('view', [
                    'view' => $view,
        ]);
    }
}


