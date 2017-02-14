<?php

namespace app\models;

use yii\db\ActiveRecord;

class Shoe_size extends ActiveRecord {
    
    public static function tableName() {
        return 'shoe_size';
    }
   public function getProduct(){
        return $this->hasMany(Product::className(), ['id' => 'prod_id']);
    }
}