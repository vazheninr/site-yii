<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
//$this->title = 'Магазин обуви';
?>


<div class="center_content">
 <div class="center_title_bar"><?= $cat ?></div>
    <div class="prod_box_big">
     <div class="pagination"><div class="results">Всего товаров: <?= $totalCount ?></div></div>
    </div>


    <?php if(!empty($hits1)): ?>
    <div class="prod_box_cat">
        <?php foreach ($hits1 as $hit1): ?>
        <?php $mainImg = $hit1->getImage();?>
        <div class="prod_box">
            <div class="center_prod_box">
                <div class="product_img">
                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit1->id]) ?>">
                       <?= Html::img($mainImg->getUrl(), ['alt' => $cat.' '.$hit1->name_product, 'title'=>$cat.' '.$hit1->manufacturer->name_manufacturer.' '.$hit1->name_product, 'border'=>'0'])?>
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
                        <?php if($hit1->size35): ?><li>35</li> <?php endif; //перечисляем размеры?>
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
                    
                       <?php if($col): ?> Отзывов (<?=$col?>) <?php endif; ?>  </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
   
   <div class="prod_box_big">
    <?php
        echo \yii\widgets\LinkPager::widget([
           'pagination' => $pages,
            'firstPageLabel' => 'В начало',
            'lastPageLabel' => 'В конец',
        ]);
        ?> 
   </div>
        <?php else :?>
        <h2>Здесь товаров пока нет...</h2>
    <?php endif;?>
   


 

 <!--<div class="prod_box_big"><div class="pagination"><div class="links"> Страница:  <b>1</b>  <a href="">2</a>  <a href="http://nubuck.com.ua/woman/sapogi?page=2">Вперед &gt;</a> </div><div class="results">Всего товаров: 39</div></div></div>-->
  
  <br class="clear">
</div>