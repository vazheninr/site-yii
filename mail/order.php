<div class="table-responsive">
    Добрый день!<br>Вы заказали в нашем интернет-магазине следующие товары:
    <table style="width: 100%; border: 1px solid #ddd; border-collapse: collapse;">
        <thead>
        <tr style="background: #f9f9f9;">
            <th style="padding: 8px; border: 1px solid #ddd;">Наименование</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Размер</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Кол-во</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Цена</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Сумма</th>
        </tr>
        </thead>
        <tbody>
        <?php// foreach($session['cart'] as $id => $item):?>
        <?php foreach ($session['cart'] as $it)://корзина?>
            <?php foreach ($it as $item): ?>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['name']?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['sozesize']?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['qty']?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['price']?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['qty'] * $item['price']?></td>
            </tr>
            <?php endforeach ?>
        <?php endforeach?>
        <tr>
            <td colspan="4" style="padding: 8px; border: 1px solid #ddd;">Итого: </td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $session['cart.qty']?></td>
        </tr>
        <tr>
            <td colspan="4" style="padding: 8px; border: 1px solid #ddd;">На сумму: </td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $session['cart.sum']?></td>
        </tr>
        </tbody>
    </table>
    В ближайшее время с Вами свяжется наш менеджер.<br> Спасибо, что пользуетесь нашим магазином.
</div>