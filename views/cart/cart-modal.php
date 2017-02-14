<?php
use yii\helpers\Html;
?>
    <?php if(!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Размер</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $item)://корзина?>
                <?php foreach($item as $it): ?>
                <tr>
                   <!-- <td><?php //\yii\helpers\Html::img("@web/images/products/{$it["img"]}", ['alt' => $it['name'], 'height' => 50])?></td>-->
                    <td><?= \yii\helpers\Html::img($it["img"], ['alt' => $it['name'], 'height' => 50])?></td>
                    <td><?= $it['name']?></td>
                    <td><?= $it['sozesize']?></td>
                    <td><?= $it['qty']?></td>
                    <td><?= $it['price']?></td>
                    <td><span data-id="<?= $it['id'] ?>" data-sozesize="<?= $it['sozesize'] ?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
                <?php endforeach?>
            <?php endforeach?>
                <tr>
                    <td colspan="4">Итого: </td>
                    <td><?= $session['cart.qty']?></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">На сумму: </td>
                    <td><?= $session['cart.sum']?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>
