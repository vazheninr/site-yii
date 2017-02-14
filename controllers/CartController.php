<?php

namespace app\controllers;

use app\models\Product;
use app\models\Cart;
use app\models\Order;
use app\models\OrderItems;
use app\models\Category;
use app\models\Manufacturer;
use app\models\Shoe_size;
use app\models\More_foto;
use Yii;

/* Array
  (
  [1] => Array
  (
  [qty] => QTY
  [name] => NAME
  [price] => PRICE
  [img] => IMG
  )
  [10] => Array
  (
  [qty] => QTY
  [name] => NAME
  [price] => PRICE
  [img] => IMG
  )
  )
  [qty] => QTY,
  [sum] => SUM
  ); */

class CartController extends AppController {

    public function actionAdd() {
        $id = Yii::$app->request->get('id'); //id продукта
        $sozesize = Yii::$app->request->get('sozesize'); // размер
       // $product = Product::findOne($id);//////////////////////////////////////
         $product = Product::find()->with('category')->with('manufacturer')->where(['id' => $id])->limit(1)->one();
        if (empty($product))
            return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product, $sozesize);
        /* debug($session['cart']);
          debug($session['cart.qty']);
          debug($session['cart.sum']); */
        if (!Yii::$app->request->isAjax) {//если запрос аякс
            return $this->redirect(Yii::$app->request->referrer); //вернуть пользователя на страницу с которой пришол
        }
        $this->layout = false; //отключили шаблон
        return $this->render('cart-modal', compact('session'));
    }

    public function actionClear() {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionDelItem() {
        $id = Yii::$app->request->get('id');
        $sozesize = Yii::$app->request->get('sozesize'); // размер
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id, $sozesize);
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionShow() {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionQty() {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-qty', compact('session'));
    }

    public function actionView() {
        $session = Yii::$app->session;
        $session->open();
        $this->setMeta('Корзина');
        $order = new Order();
        if ($order->load(Yii::$app->request->post())) {
            $order->qty = $session['cart.qty'];
            $order->sum = $session['cart.sum'];
            $order->status = 0;
            if ($order->save()) {
                $this->saveOrderItems($session['cart'], $order->id);
                Yii::$app->session->setFlash('success', 'Ваш заказ принят. Менеджер вскоре свяжется с Вами.');
                Yii::$app->mailer->compose('order', ['session' => $session])//отправка почты
                    ->setFrom(['vazheninr@mail.ru' => 'yii2.loc'])//логин совподаетс config/veb/ 'username' => 'vazheninr',
                    ->setTo($order->email)//покупатель
                  //  ->setTo(Yii::$app->params['adminEmail'])//админ/
                    ->setSubject('Заказ')
                    ->send();
                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка оформления заказа');
            }
        }
        return $this->render('view', compact('session', 'order'));
    }

    protected function saveOrderItems($items, $order_id) {
        foreach ($items as $ite) {
            foreach ($ite as $item) {
                $order_items = new OrderItems();
                $order_items->order_id = $order_id;
                $order_items->product_id = $item['id'];
                $order_items->name = $item['name'];
                $order_items->price = $item['price'];
                $order_items->qty_item = $item['qty'];
                $order_items->sum_item = $item['qty'] * $item['price'];
                $order_items->shuthesize = $item['sozesize'];
                $order_items->save();
            }
        }
    }

}
