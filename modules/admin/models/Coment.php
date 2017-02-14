<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "coment".
 *
 * @property integer $id
 * @property string $coment_text
 * @property integer $id_product
 * @property string $authot
 * @property string $date
 */
class Coment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'coment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['coment_text'], 'string'],
            [['id_product'], 'integer'],
            [['date'], 'safe'],
            [['authot'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'coment_text' => 'Coment Text',
            'id_product' => 'Id Product',
            'authot' => 'Authot',
            'date' => 'Date',
        ];
    }
}
