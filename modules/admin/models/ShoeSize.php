<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "shoe_size".
 *
 * @property integer $id
 * @property integer $prod_id
 * @property integer $size_i
 */
class ShoeSize extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shoe_size';
    }

    public function getProduct(){
        return $this->hasMany(Product::className(), ['id' => 'prod_id']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prod_id', 'size_i'], 'required'],
            [['prod_id', 'size_i'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prod_id' => 'Prod ID',
            'size_i' => 'Введите размер',
        ];
    }
}
