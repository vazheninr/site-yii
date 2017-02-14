<?php

namespace app\models;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord{
    
    public function behaviors()//поведение для фото
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

     public function addToCart($product, $sozesize, $qty = 1){//добавление в карзину
         $mainImg = $product->getImage();
        if(isset($_SESSION['cart'][$product->id][$sozesize])){
            $_SESSION['cart'][$product->id][$sozesize]['qty'] += $qty;
        }else{
        $_SESSION['cart'][$product->id][$sozesize] = [
            'qty' => $qty,
            'name' => $product->category->keywords . " " . $product->manufacturer->name_manufacturer . " " . $product->name_product,
            'sozesize' => $sozesize,
            'price' => $product->price,
            'img' =>  $mainImg->getUrl('x50'),//картинка с размером
            // 'img' => $product->img,
            'id' => $product->id
        ];
          }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $product->price : $qty * $product->price;
    }
    
     public function recalc($id, $sozesize){//удаление из карзины
        if(!isset($_SESSION['cart'][$id][$sozesize])) return false;
        $qtyMinus = $_SESSION['cart'][$id][$sozesize]['qty'];
        $sumMinus = $_SESSION['cart'][$id][$sozesize]['qty'] * $_SESSION['cart'][$id][$sozesize]['price'];
        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'][$id][$sozesize]);
        if($_SESSION['cart.qty']==0 && $_SESSION['cart.sum']==0) {
            unset ($_SESSION['cart']);
            unset ($_SESSION['cart.qty']);
            unset ($_SESSION['cart.sum']);
        }
    }
} 