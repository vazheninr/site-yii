<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "manufacturer".
 *
 * @property string $id
 * @property string $name_manufacturer
 */
class Manufacturer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manufacturer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_manufacturer'], 'required'],
            [['name_manufacturer'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ производителя',
            'name_manufacturer' => 'Название производителя',
        ];
    }
}
