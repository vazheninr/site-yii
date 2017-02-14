<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ShoeSize */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shoe-size-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prod_id')->textInput() ?>

    <?= $form->field($model, 'size_i')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
