<?php

namespace app\models;

use yii\db\ActiveRecord;

class Coment extends ActiveRecord {
    
    public static function tableName() {
        return 'coment';
    }
    public function getProduct(){
        return $this->hasOne(Product::className(), ['id' => 'id_product']);
    }
}