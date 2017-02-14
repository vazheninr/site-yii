<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Carousel;

//$this->title = 'Магазин обуви';
?>
<div class="center_content">
    
    <div class="prod_box_cat"><!-- http://www.w3schools.com/bootstrap/bootstrap_carousel.asp-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./images/shamrock_20.14_ruf_main.jpg" alt="shamrock">
    </div>

    <div class="item">
      <img src="./images/shamrock_20.2_main.jpg" alt="shamrock">
    </div>

    <div class="item">
      <img src="./images/rondo_322-91_main.jpg" alt="rondo">
    </div>

    <div class="item">
      <img src="./images/shark_B-183_main.jpg" alt="shark">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div> 
     <br class="clear">

    <?php if(!empty($hits1)): ?>
    <div class="center_title_bar">Рекомендуемая мужская обувь</div>
    <div class="prod_box_cat">
        <?php foreach ($hits1 as $hit1): ?>
          <?php $mainImg = $hit1->getImage();?>
        <div class="prod_box">
            <div class="center_prod_box">
                <div class="product_img">
                   <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit1->id]) ?>">
                       <!-- <?php// Html::img("@web/images/products/{$hit1->img}", ['alt' => $hit1->name_product, 'title'=>'Мужские туфли броги Drongov Spektor-5', 'border'=>'0'])?>-->
                       <?= Html::img($mainImg->getUrl(), ['alt' => $hit1->name_product, 'title'=>'Мужские туфли броги Drongov Spektor-5', 'border'=>'0'])?>
                       </a>
                </div>
                <div class="product_name">
                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit1->id]) ?>"><?= $hit1->manufacturer->name_manufacturer ?><?= $hit1->name_product ?></a><br></div>
                <div class="prod_price">
                    <span><?= $hit1->price?> грн</span>
                </div>
                <div class="coptions">
                    <span class="stock clearfix"><b>Наличие:</b> <i><?php if($hit1->y_n): ?>Есть в&nbsp;наличии<?php endif; ?><?php if(!$hit1->y_n): ?>Предзаказ<?php endif; ?></i></span>
                    Размер:<ul class="copt">                       
                        <?php if($hit1->size35): ?><li>35</li> <?php endif; ?>
                        <?php if($hit1->size36): ?><li>36</li> <?php endif; ?>
                        <?php if($hit1->size37): ?><li>37</li> <?php endif; ?>
                        <?php if($hit1->size38): ?><li>38</li> <?php endif; ?>
                        <?php if($hit1->size39): ?><li>39</li> <?php endif; ?>
                        <?php if($hit1->size40): ?><li>40</li> <?php endif; ?>
                        <?php if($hit1->size41): ?><li>41</li> <?php endif; ?>
                        <?php if($hit1->size42): ?><li>42</li> <?php endif; ?>
                        <?php if($hit1->size43): ?><li>43</li> <?php endif; ?>
                        <?php if($hit1->size44): ?><li>44</li> <?php endif; ?>
                        <?php if($hit1->size45): ?><li>45</li> <?php endif; ?>
                    </ul>
                    <div class="p_comments"> 
                         <?php //считаем количество коментариев
                         $col = 0;
                         foreach ($commet as $com){
                         if($com->id_product == $hit1->id ) {$col++;}}      
                         ?>
                       <?php echo (($col)?"Отзывов ($col)":"")." 
                               </div></div>"?>  
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <?php if(!empty($hits2)): ?>
    <div class="center_title_bar">Рекомендуемая женская обувь</div>
    <div class="prod_box_cat">
         <?php foreach ($hits2 as $hit2): ?>
        <?php $mainImg = $hit2->getImage();?>
        <div class="prod_box">
            <div class="center_prod_box">
                <div class="product_img">
                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit2->id]) ?>">
                         <?= Html::img($mainImg->getUrl(), ['alt' => $hit2->name_product, 'title'=>'Демисезонные женские ботинки Morento 10120-186', 'border'=>'0'])?>
                    </a>
                </div>
                <div class="product_name">
                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit2->id]) ?>"><?= $hit2->manufacturer->name_manufacturer ?> <?= $hit1->name_product ?></a><br></div>
                <div class="prod_price">
                    <span><?= $hit2->price?> грн</span>
                </div>
                <div class="coptions">
                    <span class="stock clearfix"><b>Наличие:</b> <i><?php if($hit2->y_n): ?>Есть в&nbsp;наличии<?php endif; ?><?php if(!$hit2->y_n): ?>Предзаказ<?php endif; ?></i></span>
                    Размер:<ul class="copt">
                        <?php if($hit2->size35): ?><li>35</li> <?php endif; ?>
                        <?php if($hit2->size36): ?><li>36</li> <?php endif; ?>
                        <?php if($hit2->size37): ?><li>37</li> <?php endif; ?>
                        <?php if($hit2->size38): ?><li>38</li> <?php endif; ?>
                        <?php if($hit2->size39): ?><li>39</li> <?php endif; ?>
                        <?php if($hit2->size40): ?><li>40</li> <?php endif; ?>
                        <?php if($hit2->size41): ?><li>41</li> <?php endif; ?>
                        <?php if($hit2->size42): ?><li>42</li> <?php endif; ?>
                        <?php if($hit2->size43): ?><li>43</li> <?php endif; ?>
                        <?php if($hit2->size44): ?><li>44</li> <?php endif; ?>
                        <?php if($hit2->size45): ?><li>45</li> <?php endif; ?>
                    </ul>

                    <div class="p_comments">
                       <?php //считаем количество коментариев
                         $col = 0;
                         foreach ($commet as $com){
                         if($com->id_product == $hit2->id ) {$col++;}}      
                         ?>
                    
                       <?php if($col): ?> Отзывов (<?=$col?>) <?php endif; ?>   </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
 
    <?php if(!empty($news1)): ?>
    <div class="center_title_bar">Последние поступления </div>
    <div class="prod_box_cat">
        <?php foreach ($news1 as $new1): ?>
        <?php $mainImg = $new1->getImage();?>
        <div class="prod_box">
            <div class="center_prod_box">
                <div class="product_img">
                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $new1->id]) ?>">
                         <?= Html::img($mainImg->getUrl(), ['alt' => $new1->name_product, 'title'=>'Демисезонные женские ботинки Roberto Netti 1834', 'border'=>'0'])?>
                    </a>
                </div>
                <div class="product_name">
                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $new1->id]) ?>"><?= $new1->manufacturer->name_manufacturer ?> <?= $new1->name_product ?></a><br></div>
                <div class="prod_price">
                    <span><?= $new1->price?> грн</span>
                </div>
                <div class="coptions">
                    <span class="stock clearfix"><b>Наличие:</b> <i><?php if($new1->y_n): ?>Есть в&nbsp;наличии<?php endif; ?><?php if(!$new1->y_n): ?>Предзаказ<?php endif; ?></i></span>
                    Размер:<ul class="copt">
                         <?php if($new1->size35): ?><li>35</li> <?php endif; ?>
                        <?php if($new1->size36): ?><li>36</li> <?php endif; ?>
                        <?php if($new1->size37): ?><li>37</li> <?php endif; ?>
                        <?php if($new1->size38): ?><li>38</li> <?php endif; ?>
                        <?php if($new1->size39): ?><li>39</li> <?php endif; ?>
                        <?php if($new1->size40): ?><li>40</li> <?php endif; ?>
                        <?php if($new1->size41): ?><li>41</li> <?php endif; ?>
                        <?php if($new1->size42): ?><li>42</li> <?php endif; ?>
                        <?php if($new1->size43): ?><li>43</li> <?php endif; ?>
                        <?php if($new1->size45): ?><li>45</li> <?php endif; ?>
                    </ul>
                    <div class="p_comments">
                       <?php //считаем количество коментариев
                         $col = 0;
                         foreach ($commet as $com){
                         if($com->id_product == $news1->id ) {$col++;}}      
                         ?>                   
                       <?php if($col): ?> Отзывов (<?=$col?>) <?php endif; ?>   </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <div class="center_title_bar">Наши преимущества</div>
    <div class="about_us_big">
        <div class="about_us">
            <ul class="about_us_ul">
                <li><strong>Качественная обувь</strong><br></li>
                Сделав заказ в интернет-магазине обуви, Вы всегда можете быть уверенны, что приобретаете оригинальную обувь высокого качества по выгодной цене. На всю обувь дается увеличенная гарантия в течении 60 дней в соответствии с Законом Украины «О защите прав потребителей».<br>
                <br>
                <li><strong>Бесплатная доставка и удобная оплата</strong><br></li>
                Доставка в любую точку Украины осуществляется бесплатно. Вы можете оплатить товар после осмотра (примерки) в отделении службы доставки или сделав предоплату для большей экономии.<br>
                <br>
                <li><strong>Точный подбор размера</strong><br></li>
                После оформления заказа мы уточним размер выбранной Вами модели по длине стопы, чтобы заказанная пара подошла наилучшим образом.<br>
                <br>
                <li><strong>Бесплатный обмен или возврат</strong><br></li>
                Если все же Вам не подошла или не понравилась заказанная пара, то мы бесплатно её заменим или вернем деньги.<br>
                <br>
                <li><strong>Внимательное и вежливое обслуживание</strong><br></li>
                Мы предоставляем исключительно качественный сервис с выполнением всех принятых на себя обязательств в соответствии с Законом Украины и декларируемых на нашем сайте. Индивидуальный подход к каждому клиенту, решение всех возникающих вопросов в интересах покупателя в кратчайшие сроки - это наша политика в области качества предоставления услуг.<br>
            </ul>
            Сделайте заказ и убедитесь, что покупать обувь у нас просто и удобно, при этом Вы сэкономите своё время и деньги, а удовольствие, полученное от отличной обуви, наверняка сделает Вас нашим постоянным клиентом!<br>
        </div>
    </div>
    <br class="clear">
</div>


