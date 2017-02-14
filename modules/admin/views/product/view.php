<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->category->name_category." ".$model->manufacturer->name_manufacturer." ".$model->name_product;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php $img = $model->getImage();?>
    
    <?php/* $viewsize = "";//подготовим размеры
             $viewsize .= $model->size35 . ' ' . $model->size36 . ' ' . $model->size37 
                . ' ' . $model->size38 . ' ' . $model->size39 . ' ' . $model->size40 . ' '
                . $model->size41 . ' ' . $model->size42 . ' ' . $model->size43 . ' ' 
                . $model->size44 . ' ' . $model->size45 . ' ';*/
    
     ?>
             
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            // 'category_id',
            [
                'attribute' => 'category_id',
                'value' => $model->category->name_category,
            ],
            // 'manufacturer_id',
             [
                'attribute' => 'manufacturer_id',
                'value' => $model->manufacturer->name_manufacturer,
            ],  
            'name_product',
            'content:ntext',
            'price',
            'keywords',
            'description',
            //'img',
           
            [
                'attribute' => 'size35',
                'value' => !$model->size35 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'size36',
                'value' => !$model->size36 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'size37',
                'value' => !$model->size37 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'size38',
                'value' => !$model->size38 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'size39',
                'value' => !$model->size39 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'size40',
                'value' => !$model->size40 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'size41',
                'value' => !$model->size41 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'size42',
                'value' => !$model->size42 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'size43',
                'value' => !$model->size43 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'size44',
                'value' => !$model->size44 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'size45',
                'value' => !$model->size45 ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl()}'>",
                'format' => 'html',
            ],
            [
                'attribute' => 'hit',
                'value' => !$model->hit ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'new',
                'value' => !$model->new ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'sale',
                'value' => !$model->sale ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
            //'m_w',
            [
                'attribute' => 'm_w',
                'value' => !$model->sale ? '<span class="text-danger">Мужская</span>' : '<span class="text-success">Женская</span>',
                'format' => 'html',
            ],
            //'y_n',
            [
                'attribute' => 'y_n',
                'value' => !$model->sale ? '<span class="text-success">Есть</span>' : '<span class="text-danger">Нет</span>',
                'format' => 'html',
            ],
            'up',
            'down',
            'colour',
            'country',
        ],
    ]) ?>

</div>
