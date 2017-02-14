<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
//$this->title = 'Магазин обуви';
?>


<div class="center_content">
 <div class="center_title_bar"><?= $cat ?></div>
    <div class="prod_box_big">
  <div class="sort clearfix">


   <div class="sort_list" style="width: 280px">
     <span class="sort_list_text">Сортировать по:</span>
     <div class="sort_list_active sorts">
                     <span>умолчанию</span><span class="sort_list_arrow">&nbsp;</span>
                                                                           </div>
     <div class="sort_list_inner sorts">
                     <span>умолчанию</span><span class="sort_list_arrow">&nbsp;</span>
                                                                                                         <a href="http://nubuck.com.ua/woman/sapogi?sort=p.price&amp;order=ASC">возрастанию цены</a>
                            <a href="http://nubuck.com.ua/woman/sapogi?sort=p.price&amp;order=DESC">убыванию цены</a>
                            <a href="http://nubuck.com.ua/woman/sapogi?sort=review&amp;order=DESC">количеству отзывов</a>
                            <a href="http://nubuck.com.ua/woman/sapogi?sort=p.date_added&amp;order=DESC">новизне</a>
                   </div>
   </div>

   <div class="right">
    <div class="sort_list canhide" style="width: 140px">
       <span class="sort_list_text">Вид:</span>
       <div class="sort_list_active display"><span><i class="grid"></i> плитка</span><span class="sort_list_arrow">&nbsp;</span></div>
       <div class="sort_list_inner display"><span><i class="grid"></i> плитка</span><span class="sort_list_arrow">&nbsp;</span><a onclick="display(&#39;list&#39;);"><i class="list"></i> список</a></div>
     </div>
     <div class="sort_list canhide" style="width: 150px">
       <span class="sort_list_text">На странице:</span>
       <div class="sort_list_active on_page">
                           <span>24</span><span class="sort_list_arrow">&nbsp;</span>
                                                                               </div>
       <div class="sort_list_inner on_page">
                           <span>24</span><span class="sort_list_arrow">&nbsp;</span>
                                                                                                                     <a href="http://nubuck.com.ua/woman/sapogi?on_page=12">12</a>
                                    <a href="http://nubuck.com.ua/woman/sapogi?on_page=36">36</a>
                                    <a href="http://nubuck.com.ua/woman/sapogi?on_page=99">99</a>
                         </div>
     </div>
   </div>
 </div>

  <!--<div class="pagination"><div class="links"> Страница:  <b>1</b>  <a href="http://nubuck.com.ua/woman/sapogi?page=2">2</a>  <a href="http://nubuck.com.ua/woman/sapogi?page=2">Вперед &gt;</a> </div><div class="results">Всего товаров: 39</div></div>-->

 </div>

 
 <div class="center_content">

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
                        <?php foreach ($s_sizes as $s_size): //перечисляем размеры?>                
                        <?php if($s_size->prod_id == $hit1->id): ?> <li><?=$s_size->size_i?></li> <?php endif; ?>
                        <?php endforeach; ?>
 
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
        ]);
        ?> 
   </div>
        <?php else :?>
        <h2>Здесь товаров пока нет...</h2>
    <?php endif;?>
   

</div>
 

 <!--<div class="prod_box_big"><div class="pagination"><div class="links"> Страница:  <b>1</b>  <a href="http://nubuck.com.ua/woman/sapogi?page=2">2</a>  <a href="http://nubuck.com.ua/woman/sapogi?page=2">Вперед &gt;</a> </div><div class="results">Всего товаров: 39</div></div></div>-->
  
  <br class="clear">
</div>