<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveRecord;
use yii\widgets\ActiveForm;
?>
<div class="center_content">
<div class="center_title_bar">Оформление заказа</div>
<?php //Flash плэер ?>
<?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
<?php endif;?>
<?php if( Yii::$app->session->hasFlash('error') ): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
<?php endif;?>

<div class='container'>
<?php if (!empty($session['cart'])): ?>
        <div class="table-responsive">
            <table class="table table-hover table-striped" style="width: 740px;">
                <thead>
                    <tr>
                        <th>Фото</th>
                        <th>Наименование</th>
                        <th>Размер</th>
                        <th>Кол-во</th>
                        <th>Цена</th>
                        <th>Сумма</th>
                        <td></td>
                       <!-- <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($session['cart'] as $item)://корзина?>
        <?php foreach ($item as $it): ?>
                            <tr>
                                <!--<td><?php// \yii\helpers\Html::img("@web/images/products/{$it["img"]}", ['alt' => $it['name'], 'height' => 50]) ?></td>-->
                                <td><?= \yii\helpers\Html::img($it["img"], ['alt' => $it['name'], 'height' => 50]) ?></td>
                                <td><a href="<?= Url::to(['product/view', 'id' => $it['id']]) ?>"><?= $it['name'] ?></a></td>
                                <td><?= $it['sozesize'] ?></td>
                                <td><?= $it['qty'] ?></td>
                                <td><?= $it['price'] ?></td>
                                <td><?= $it['qty'] * $it['price'] ?></td>
                                <td></td>
                               <!-- <td><span data-id="<?php// $it['id'] ?>" data-sozesize="<?php// $it['sozesize'] ?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>-->
                            </tr>
                        <?php endforeach ?>
    <?php endforeach ?>
                    <tr>
                        <td colspan="5">Итого: </td>
                        <td><?= $session['cart.qty'] ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="5">На сумму: </td>
                        <td><?= $session['cart.sum'] ?></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php $form = ActiveForm::begin() ?>
    <?= $form->field($order, 'name') ?>
     <?= $form->field($order, 'email') ?>
     <?= $form->field($order, 'phone') ?>
     <?= $form->field($order, 'address') ?>
    <?= Html::submitButton('Заказать', ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end() ?>
    <?php else: ?>
        <h3>Корзина пуста</h3>
<?php endif; ?>

</div>
    </div>
