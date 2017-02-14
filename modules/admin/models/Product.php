<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property string $id
 * @property string $category_id
 * @property integer $manufacturer_id
 * @property string $name_product
 * @property string $content
 * @property double $price
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property string $new
 * @property string $sale
 * @property integer $m_w
 * @property integer $y_n
 * @property string $up
 * @property string $down
 * @property string $colour
 * @property string $country
 */
class Product extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;


    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }
    
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    
    public function getManufacturer(){
        return $this->hasOne(Manufacturer::className(), ['id' => 'manufacturer_id']);
    }
    
  /*  public function getShoe_size(){
        return $this->hasMany(Shoe_size::className(), ['prod_id' => 'id']);
    }*/
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size35', 'size36', 'size37', 'size38', 'size39', 'size40', 'size41', 'size42', 'size43', 
                'size44', 'size45'], 'boolean'],
            [['category_id', 'name_product', 'm_w', 'y_n'], 'required'],
            [['category_id', 'manufacturer_id', 'm_w', 'y_n'], 'integer'],
            [['content', 'hit', 'new', 'sale'], 'string'],
            [['price'], 'number'],
            [['name_product', 'keywords', 'description', 'img', 'up', 'down', 'colour', 'country'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID товара',
            'category_id' => 'Категория',
            'manufacturer_id' => 'Производиель',
            'name_product' => 'Наименование',
            'content' => 'Контент',
            'price' => 'Цена',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описание',
            'image' => 'Фото',
            'gallery' => 'Галерея',
            'hit' => 'Хит',
            'new' => 'Новинка',
            'sale' => 'Распродажа',
            'm_w' => 'Мужская/Женская',
            'y_n' => 'Наличие',
            'up' => 'Верх',
            'down' => 'Низ',
            'colour' => 'Цвет',
            'country' => 'Страна',
            'size35' => 'Размер 35',
            'size36' => 'Размер 36',
            'size37' => 'Размер 37',
            'size38' => 'Размер 38',
            'size39' => 'Размер 39',
            'size40' => 'Размер 40',
            'size41' => 'Размер 41',
            'size42' => 'Размер 42',
            'size43' => 'Размер 43',
            'size44' => 'Размер 44',
            'size45' => 'Размер 45',
        ];
    }
    
    public function upload(){
        if($this->validate()){
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);//$path - это пут к картинке
             $this->attachImage($path, true);//выводит изображение
            @unlink($path);//удаляет исходное изображение
            return true;
        }else{
            return false;
        }
    }
    public function uploadGallery(){
        if($this->validate()){
            foreach($this->gallery as $file){
                $path = 'upload/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        }else{
            return false;
        }
    }
}
