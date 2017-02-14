<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
//mihaildev\elfinder\Assets::noConflict($this);
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">
    <?php //debug($model)?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php // $form->field($model, 'category_id')->textInput(['maxlength' => true]) ?>
    <?php// $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->where(['parent_id' => !0])->all(), 'id', 'keywords')) ?>


   <div class="form-group field-product-category_id has-success">
        <label class="control-label" for="product-category_id">Категория</label>
        <select id="product-category_id" class="form-control" name="Product[category_id]">
            <?= \app\components\MenuWidget::widget(['tpl' => 'select_product', 'model' => $model])?>
        </select>
    </div>
    
    <?php// $form->field($model, 'manufacturer_id')->textInput() ?>
    
     <?= $form->field($model, 'manufacturer_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Manufacturer::find()->all(), 'id', 'name_manufacturer')) ?>
    
   <?php/* <div class="form-group field-product-manufacturer_id has-success">
        <label class="control-label" for="product-manufacturer_id">Производитель</label>
        <select id="product-manufacturer_id" class="form-control" name="Manufacturer[manufacturer_id]">
            <?= \app\components\Menu1Widget::widget(['tpl1' => 'select_manufacturer', 'model' => $model])?>
        </select>
    </div>*/?>

    <?= $form->field($model, 'name_product')->textInput(['maxlength' => true]) ?>

    <?php// $form->field($model, 'content')->textarea(['rows' => 6]) ?>
    
     <?php
    echo $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);
    ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>
    
    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'hit')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'new')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'sale')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'm_w')->dropDownList([ '0' => 'Мужская', '1' => 'Женская', ]) ?>

    <?= $form->field($model, 'y_n')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'up')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'down')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'size35')->checkbox([ '0', '1', ]) ?>
    <?= $form->field($model, 'size36')->checkbox([ '0', '1', ]) ?>
    <?= $form->field($model, 'size37')->checkbox([ '0', '1', ]) ?>
    <?= $form->field($model, 'size38')->checkbox([ '0', '1', ]) ?>
    <?= $form->field($model, 'size39')->checkbox([ '0', '1', ]) ?> 
    <?= $form->field($model, 'size40')->checkbox([ '0', '1', ]) ?> 
    <?= $form->field($model, 'size41')->checkbox([ '0', '1', ]) ?>
     <?= $form->field($model, 'size42')->checkbox([ '0', '1', ]) ?> 
     <?= $form->field($model, 'size43')->checkbox([ '0', '1', ]) ?> 
     <?= $form->field($model, 'size44')->checkbox([ '0', '1', ]) ?> 
     <?= $form->field($model, 'size45')->checkbox([ '0', '1', ]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
