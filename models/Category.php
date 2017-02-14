<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord {
    
    public function behaviors()//поведение для фото
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    
    public static function tableName() {
        return 'category';
    }
    public function getProduct(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}


