<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

//$this->title = 'Магазин обуви';
?>

<?php
$mainImg = $hit1->getImage();
//$mainImgs = $hits->getImage();
$gallery = $hit1->getImages(); //подготовка изображения
?>

<div class="center_content">
    <div class="center_title_bar"><?= $hit1->category->keywords . " " . $hit1->manufacturer->name_manufacturer . " " . $hit1->name_product ?></div>
    <div class="prod_box_big">
        <div style="width: 100%; margin-bottom: 5px;">
            <table class="prod-info" style="width: 100%; border-collapse: collapse;">
                <tbody><tr>
                       <!-- <td style="text-align: center; width: 250px; vertical-align: middle;" class="picture"><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit1->id, 'title' => $hit1->category->keywords, 'class' => 'thickbox', 'rel' => 'group']) ?>"><?= Html::img("@web/images/products/{$hit1->img}", ['alt' => $cat . ' ' . $hit1->name_product, 'title' => $cat . ' ' . $hit1->manufacturer->name_manufacturer . ' ' . $hit1->name_product, 'border' => '0', 'id' => 'image', 'style' => 'margin-bottom: 3px;']) ?></a><br>       
                    </td>--><td style="text-align: center; width: 250px; vertical-align: middle;" class="picture"><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit1->id, 'title' => $hit1->category->keywords, 'class' => 'thickbox', 'rel' => 'group']) ?>"><?= Html::img($mainImg->getUrl(), ['alt' => $cat . ' ' . $hit1->name_product, 'title' => $cat . ' ' . $hit1->manufacturer->name_manufacturer . ' ' . $hit1->name_product, 'border' => '0', 'id' => 'image', 'style' => 'margin-bottom: 3px;']) ?></a><br>       
                        </td><td style="padding-left: 5px; width: 306px; vertical-align: top;" class="shop">
                            <div class="product_title_big"><?= $hit1->category->keywords . " " . $hit1->manufacturer->name_manufacturer . " " . $hit1->name_product ?></div>
                            <table width="100%" class="properties">
                                <tbody>
                                    <tr>
                                        <td><b>Цена:</b></td>
                                        <td><!-- <span style="color: #666; text-decoration: line-through;"><?php// $hit1->price ?> грн</span><br>--><b><span style="color: #C40000; font-size: 16px"><?= $hit1->price ?> грн</span></b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Наличие:</b></td>
                                        <td><?php if ($hit1->y_n): ?>Есть в наличии<?php endif; ?><?php if (!$hit1->y_n): ?>Предзаказ<?php endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Модель:</b></td>
                                        <td><?php if ($hit1->m_w): ?>Женская<?php endif; ?><?php if (!$hit1->m_w): ?>Мужская<?php endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Производитель:</b></td>
                                        <td><a href="<?= \yii\helpers\Url::to(['manufacturer/view', 'id' => $hit1->manufacturer['id']]) ?>"> <span><?= $hit1->manufacturer->name_manufacturer ?></span></a></td>
                                    </tr>
                                </tbody></table>
                            <form action="" method="post" enctype="multipart/form-data" id="product">
                                <div class="yel" style="">
                                    <p class="optname">Выберите <i>Размер</i>:</p><p class="razmery">
                                        <?php if ($hit1->size35): ?><label><input type="radio" name="option[605]" class="radioinput" value="35"><span>35</span></label><?php endif; ?>
                                        <?php if ($hit1->size36): ?><label><input type="radio" name="option[605]" class="radioinput" value="36"><span>36</span></label><?php endif; ?>
                                        <?php if ($hit1->size37): ?><label><input type="radio" name="option[605]" class="radioinput" value="37"><span>37</span></label><?php endif; ?>
                                        <?php if ($hit1->size38): ?><label><input type="radio" name="option[605]" class="radioinput" value="38"><span>38</span></label><?php endif; ?>
                                        <?php if ($hit1->size39): ?><label><input type="radio" name="option[605]" class="radioinput" value="39"><span>39</span></label><?php endif; ?>
                                        <?php if ($hit1->size40): ?><label><input type="radio" name="option[605]" class="radioinput" value="40"><span>40</span></label><?php endif; ?>
                                        <?php if ($hit1->size41): ?><label><input type="radio" name="option[605]" class="radioinput" value="41"><span>41</span></label><?php endif; ?>
                                        <?php if ($hit1->size42): ?><label><input type="radio" name="option[605]" class="radioinput" value="42"><span>42</span></label><?php endif; ?>
                                        <?php if ($hit1->size43): ?><label><input type="radio" name="option[605]" class="radioinput" value="43"><span>43</span></label><?php endif; ?>
                                        <?php if ($hit1->size44): ?><label><input type="radio" name="option[605]" class="radioinput" value="44"><span>44</span></label><?php endif; ?>
                                        <?php if ($hit1->size45): ?><label><input type="radio" name="option[605]" class="radioinput" value="45"><span>45</span></label><?php endif; ?>

                                    </p><table style="width: 100%;">
                                        <tbody><tr></tr>
                                            <tr class="prd tdblock">
                                                <td valign="middle">
                                                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit1->id, 'sozesize' => 40]) ?>" data-id="<?= $hit1->id ?>" class="prod_buy" id="add-to-cart" title="Купить"><span>Купить</span></a>
                                                    <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 5]) ?>" class="howto">Как определить размер?</a>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                </div>

                                <div class="help-links ">
                                    <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 2]) ?>">Как купить?</a> <i>|</i> <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 3]) ?>">Бесплатная доставка</a> <i>|</i><br>
                                    <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 4]) ?>">Гарантия 60 дней</a> <i>|</i> <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 3]) ?>">Оплата при получении</a> <i>|</i><br>
                                    <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 4]) ?>">Обмен/возврат в течении 14 дней</a> <i>|</i><br>
                                </div>
                                <div style="background: #FFFFCC; border: 1px solid #FFCC33; padding: 7px; margin-top: 2px; margin-bottom: 15px; display:none;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody><tr>
                                                <td>Количество:                <input type="text" name="quantity" size="3" value="1"></td>
                                            </tr>
                                        </tbody></table>
                                </div>
                                <div>
                                    <input type="hidden" name="product_id" value="726">
                                    <input type="hidden" name="redirect" value="">
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody></table>
        </div>
    </div>
    <div class="center_title_bar">Описание</div>
    <div class="prod_box_big">
        <div id="tab_description" class="tab_page"><p>
                <?= $hit1->category->keywords . " " . $hit1->manufacturer->name_manufacturer . " " . $hit1->name_product ?></p>
            <p>
                <?php if ($hit1->up): ?>Верх: <?= $hit1->up ?><?php endif; ?></p>
            <p>
                <?php if ($hit1->up): ?>Внутри: <?= $hit1->down ?><?php endif; ?></p>
            <p>
                <?php if ($hit1->up): ?>Цвет: <?= $hit1->colour ?><?php endif; ?></p>
            <p>
                &nbsp;</p>
            <p>
                <?php if ($hit1->up): ?>Производство: <?= $hit1->country ?><?php endif; ?>
                <a href="<?= \yii\helpers\Url::to(['manufacturer/view', 'id' => $hit1->manufacturer['id']]) ?>"><?= $hit1->manufacturer->name_manufacturer ?></a></p>
        </div>
    </div>
    <div class="center_title_bar">Фото  (<?= count($gallery) ?>)</div>
    <div class="prod_box_big">
        <div id="tab_image" class="tab_page">
            <div>
                <!-- <?php // foreach ($more_foto as $more_f): //дополнительные фотографии   ?>            
                <?php // if ($more_f->id_product == $hit1->id): ?>
                         <div class="pic">
                <?= Html::img("@web/images/products/{$more_f->name_foto}", ['alt' => $cat . ' ' . $hit1->name_product, 'title' => $cat . ' ' . $hit1->manufacturer->name_manufacturer . ' ' . $hit1->name_product, 'border' => '1px', 'id' => 'image', 'style' => 'margin-bottom: 3px; border: 1px solid #FFEAAB;']) ?>
                         </div>
                <?php //endif; ?>
                <?php //endforeach; ?>-->

                <?php foreach ($gallery as $moref): //дополнительные фотографии ?>            
                    <div class="pic">
                        <?= Html::img($moref->getUrl(), ['alt' => $cat . ' ' . $hit1->name_product, 'title' => $cat . ' ' . $hit1->manufacturer->name_manufacturer . ' ' . $hit1->name_product, 'border' => '1px', 'id' => 'image', 'style' => 'margin-bottom: 3px; border: 1px solid #FFEAAB;']) ?>
                    </div>
                <?php endforeach; ?>

                <div class="pic"><br>
                </div>
                <br class="clear">
            </div>
        </div>
    </div>
    <a name="reviews"></a>
    <div class="center_title_bar">
        <?php
        //считаем количество коментариев
        $col = 0;
        foreach ($commet as $com) {
            if ($com->id_product == $hit1->id) {
                $col++;
            }
        }
        ?>
        <?php if ($col): ?> Отзывы (<?= $col ?>) <?php endif; ?> 
    </div>
    <div class="prod_box_big">

        <div class="sort reviewz">
            <div class="sort_list" style="width: 335px">
            </div>
        </div>

        <div id="tab_review" class="tab_page" style="clear:both">

            <div id="review"><?php if (!$col): ?> <div class="box">Нет отзывов.</div><?php else://если нет отзывов    ?>

                    <?php
                    //печатаем отзывы
                    foreach ($commet as $com):
                        ?>
                        <?php if ($com->id_product == $hit1->id): ?>      
                            <div class="box"><b><?= $com->authot ?></b><?= " | " . $com->date ?><br><?= "     " . $com->coment_text ?></div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <br>
            <div id="review_title" style="font-size:14px; font-weight:bold; margin-bottom:4px;">Написать отзыв</div>
       <!-- <form id="w0" action="/product/view" method="post">  -->
            <div class="content" style="margin-bottom:10px;">
                    <b>Имя:</b><br>
                    <input type="text" name="authot" id="review-name" value="">
                    <br>
                    <br>
                    <b>Ваш отзыв:</b>
                    <textarea name="coment_text" id="review-text" style="width: 98%;" rows="8"></textarea>
                    <br>
                    <br>
                    <b>Оценка:</b><span style="margin-left:7px;">Плохо</span>&nbsp;
                    <input type="radio" name="rating" value="1" style="margin: 0;">
                    &nbsp;
                    <input type="radio" name="rating" value="2" style="margin: 0;">
                    &nbsp;
                    <input type="radio" name="rating" value="3" style="margin: 0;">
                    &nbsp;
                    <input type="radio" name="rating" value="4" style="margin: 0;">
                    &nbsp;
                    <input type="radio" name="rating" value="5" style="margin: 0;">
                    &nbsp; <span style="margin-left:-3px;">Хорошо</span><br>
            </div>
          <!--  <button type="submit"><span>Отправить</span></button>-->
            <a class="button" onclick="review();"><span>Отправить</span></a>
        </form>
        </div>
    </div>


    <?php if (!empty($hits)): ?>
        <div class="center_title_bar">Рекомендуем (<?= count($hits) ?>)</div>
        <div class="prod_box_cat">
            <?php foreach ($hits as $hit2): ?>
                <?php $mainImgs = $hit2->getImage(); ?>
                <div class="prod_box">
                    <div class="center_prod_box">
                        <div class="product_img">
                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit2->id]) ?>">
                                <?= Html::img($mainImgs->getUrl(), ['alt' => $hit2->name_product, 'title' => $hit2->category->keywords . " " . $hit2->manufacturer->name_manufacturer . " " . $hit2->name_product, 'border' => '0']) ?>
                            </a>
                        </div>
                        <div class="product_name">
                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit2->id]) ?>"><?= $hit2->manufacturer->name_manufacturer ?> <?= $hit2->name_product ?></a><br></div>
                        <div class="prod_price">
                            <span><?= $hit2->price ?> грн</span>
                        </div>
                        <div class="coptions">
                            <span class="stock clearfix"><b>Наличие:</b> <i><?php if ($hit2->y_n): ?>Есть в&nbsp;наличии<?php endif; ?><?php if (!$hit2->y_n): ?>Предзаказ<?php endif; ?></i></span>
                            Размер:<ul class="copt">
                                <?php if ($hit2->size35): ?><li>35</li> <?php endif; //перечисляем размеры?>
                                <?php if ($hit2->size36): ?><li>36</li> <?php endif; ?>
                                <?php if ($hit2->size37): ?><li>37</li> <?php endif; ?>
                                <?php if ($hit2->size38): ?><li>38</li> <?php endif; ?>
                                <?php if ($hit2->size39): ?><li>39</li> <?php endif; ?>
                                <?php if ($hit2->size40): ?><li>40</li> <?php endif; ?>
                                <?php if ($hit2->size41): ?><li>41</li> <?php endif; ?>
                                <?php if ($hit2->size42): ?><li>42</li> <?php endif; ?>
                                <?php if ($hit2->size43): ?><li>43</li> <?php endif; ?>
                                <?php if ($hit2->size44): ?><li>44</li> <?php endif; ?>
                                <?php if ($hit2->size45): ?><li>45</li> <?php endif; ?>

                            </ul>

                            <div class="p_comments">
                                <?php
                                //считаем количество коментариев
                                $col = 0;
                                foreach ($commet as $com) {
                                    if ($com->id_product == $hit2->id) {
                                        $col++;
                                    }
                                }
                                ?>

                                <?php if ($col): ?> Отзывов (<?= $col ?>) <?php endif; ?>   </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="tags">
                Метки:   <?= $hit2->manufacturer->name_manufacturer ?> обувь,
                <?= $hit2->category->keywords . " " . $hit2->manufacturer->name_manufacturer . " " . $hit2->name_product ?> обувь украина,
                <?= $hit2->category->keywords ?> обувь харьков,
                купить <?= $hit2->category->keywords ?> украина,
            </div>
        </div>
    <?php endif; ?>
    <br class="clear">
</div>


