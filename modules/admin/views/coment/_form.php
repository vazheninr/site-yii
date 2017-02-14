<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Coment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'coment_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_product')->textInput() ?>

    <?= $form->field($model, 'authot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
