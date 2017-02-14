<?php

namespace app\models;

use yii\db\ActiveRecord;

class More_foto extends ActiveRecord {
    
    public static function tableName() {
        return 'more_foto';
    }
    public function getProduct(){
        return $this->hasOne(Product::className(), ['id' => 'id_product']);
    }
}