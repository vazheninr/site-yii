<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord {
    
    public function behaviors()//поведение для фото
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    
    public static function tableName() {
        return 'product';
    }
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    public function getManufacturer(){
        return $this->hasOne(Manufacturer::className(), ['id' => 'manufacturer_id']);
    }
    public function getComent(){
        return $this->hasMany(Coment::className(), ['id_product' => 'id']);
    }
    public function getShoe_size(){
        return $this->hasMany(Shoe_size::className(), ['prod_id' => 'id']);
    }
    public function getMore_foto(){
        return $this->hasMany(More_foto::className(), ['id_product' => 'id']);
    }
}

