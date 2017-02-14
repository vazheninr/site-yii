<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "texts".
 *
 * @property string $id
 * @property string $name
 * @property string $contenttext
 */
class Texts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'texts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['contenttext'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'contenttext' => 'Contenttext',
        ];
    }
}
