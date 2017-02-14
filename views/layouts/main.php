<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
   
<script type="text/javascript">
        jQuery(document).ready(function(){
            alert("slideshow");
            jQuery('#slideshow').fadeSlideShow();
        });
    </script>
</head>
<body class="home lang_ru">
    <?php $this->beginBody() ?>
    <a name="up-top"></a>
    <div id="main_container">
        <div id="header" class="clearfix">
            <a href="<?= \yii\helpers\Url::home()?>" class="logo"><h1>Магазин обуви</h1><!--<?= Html::img('@web/images/logo.png', ['alt' =>'магазин обуви'])?>--></a>
            <div class="right clearfix">
                <div id="header_cart">
                    <table>
                        <tbody>
                            <tr>
                                <td style="padding:0 6px 0 0; opacity:0.8;"><img src="/./images/cart.png" alt="cart"></td>
                                <td>
                                    <a href="#" onclick="return getCart()">
                                        <div class="header_cart">
                                            <div id="module_cart">
                                                <div class="middle"><span class="empty" id="empty_cart"><?= \app\components\MenWidget::widget(['tp' => 'men'])?></span></div>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr></tbody>
                    </table>
                </div>
                <div class="col-r">
                    <div class="contact">
                        Прием заказов:
                        <span><i>(091)</i> 123 45 67</span>
                        <span><i>(069)</i> 234 56 78</span>
                        <span><i>(062)</i> 345 67 89</span>
                        <span class="time">с 10:00 до 19:00</span>
                        <span id="viewform">Обратный звонок</span>
                    </div>
                </div>
            </div><!-- Правый -->
        </div>
        <div id="main_content">
            <div id="menu_tab" class="clearfix">
                <span class="md toggler cat" data-toggle="column_left"><span class="icon"><i class="bar"></i><i class="bar"></i><i class="bar"></i></span>Показать каталог</span>
                <span class="md toggler info" data-toggle="info"><span class="icon">?</span>Информация</span>
                <ul class="menu canhide" id="info">
                    <li><a class="nav" href="<?= \yii\helpers\Url::home()?>">Главная</a></li>
                    <li class="divider"></li>
                    <li><a class="nav" href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 1]) ?>">Бренды</a></li>
                    <li class="divider"></li>
                    <li><a class="nav" href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 2]) ?>">Как купить?</a></li>
                    <li class="divider"></li>
                    <li><a class="nav" href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 3]) ?>">Доставка и оплата</a></li>
                    <li class="divider"></li>
                    <li><a class="nav" href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 4]) ?>">Гарантия</a></li>
                    <li class="divider"></li>
                    <li class="md"><a class="nav" href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 5]) ?>">Как определить размер?</a></li>
                    <li class="divider md"></li>
                    <li class="md"><a class="nav" href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 6]) ?>">Уход за обувью</a></li>
                    <li class="divider md"></li>
                    <li><a class="nav" href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 8]) ?>">О компании</a></li>
                    <li class="divider"></li>
                    <li><a class="nav" href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 9]) ?>">Контакты</a></li>
                    <div class="md">
                        <span class="nav_close">
                            <span class="icon">
                                <span class="bar cr1"></span>
                                <span class="bar cr2"></span>
                            </span>Закрыть</span>
                    </div>
                </ul>
            </div>
            <div class="crumb_navigation"><!-- навигация пример Интернет магазин обуви  > Женская обувь > Сапоги-->
            </div>
 
            <div class="left_content">
                <div id="column_left" class="canhide">  
                     
                    <div class="nav cat">                   
                        <div class="title_box">Каталог</div>
                            <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
                
                    </div>
                    <div class="nav brand">
                        <div class="manuf_box"><a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 1]) ?>"><font>Производители</font></a></div>
                        <ul class="left_menu"> 
                    <?= \app\components\Menu1Widget::widget(['tpl1' => 'menu1'])?>
                      
                        </ul>
                    </div>
                    <div class="nav help">
                        <div class="title_box_2">Полезное</div>
                        <div class="category">
                            <ul>
                                <li><a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 5]) ?>">Определить размер?</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 7]) ?>">Как завязать шнурки?</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 4]) ?>">Гарантия на обувь</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 6]) ?>">Уход за обувью</a></li>
                            </ul>
                        </div>
                    </div>  <div class="soc_box">shop в соцсетях</div>
                    <div class="canhide" style="margin-top: 10px; margin-left: 14px; margin-right: 14px; margin-bottom: 3px;">
                        <a href="https://www.facebook.com/shop.com.ua" target="_blank" rel="nofollow" style="margin-right: 4px;"><img alt="Магазин обуви shop на Facebook" src="/./images/f.png"></a>
                        <a href="https://www.instagram.com/shop.com.ua" target="_blank" rel="nofollow" style="margin-right: 4px;"><img alt="Магазин обуви shop в Instagram" src="/./images/instagram.png"></a>
                        <a href="http://vk.com/shop" target="_blank" rel="nofollow" style="margin-right: 4px;"><img alt="Магазин обуви shop Вконтакте" src="/./images/vk.png"></a>
                        <a href="https://plus.google.com/+shop" target="_blank" rel="nofollow"><img alt="Магазин обуви shop в Google+" src="/./images/g+.png"></a>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="md xs">
                        <span class="nav_close">
                            <span class="icon">
                                <span class="bar cr1"></span>
                                <span class="bar cr2"></span>
                            </span>Закрыть каталог</span>
                    </div>
                </div>
            </div>
            <?= $content ?>
            <div class="right_content"><div id="column_right">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="footer">
            <div class="footer_menu">
                <a href="<?= \yii\helpers\Url::home()?>">Главная</a> |
                <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 1]) ?>">Бренды</a> |
                <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 2]) ?>">Как купить?</a> |
                <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 3]) ?>">Доставка и оплата</a> |
                <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 4]) ?>">Гарантия</a> |
                <a href="#" onclick="return getCart()">Корзина</a> |
                <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 8]) ?>">О компании</a> |
                <a href="<?= \yii\helpers\Url::to(['texts/view', 'id' => 9]) ?>">Контакты</a> |
                <a href="<?= \yii\helpers\Url::to(['..\admin']) ?> ">Логин</a>
                <?php if(!Yii::$app->user->isGuest): ?>
                 | <a href="<?= \yii\helpers\Url::to(['/site/logout'])?>"><i class="fa fa-user"></i> <?= Yii::$app->user->identity['username']?> Выход</a>
                <?php endif;?>
            </div>
            <div class="copyright">Интернет-магазин обуви  © 2016 <span>site.com.ua</span></div>
            <div class="clearfix"></div>
        </div>

        <div id="contactable"><div id="contactable-inner"><span class="c_close">123</span></div><form id="contactable-contactForm" method="" action="<?= \yii\helpers\Url::home()?>"><div id="contactable-loading"></div><div id="contactable-callback"></div><div class="contactable-holder"><p style="color:#A74F00; font-size:15px; font-weight:bold; padding: 15px 0 10px 2px;">Задать вопрос</p><p><label for="contactable-name">Ваше имя<span class="contactable-green"> * </span></label><br><input id="contactable-name" class="contactable-contact contactable-validate" name="name"></p><p><label for="contactable-email">Ваш E-mail <span class="contactable-green"> * </span></label><br><input id="contactable-email" class="contactable-contact contactable-validate" name="email"></p><p><label for="contactable-message">Сообщение <span class="contactable-green"> * </span></label><br><textarea id="contactable-message" name="message" class="contactable-message contactable-validate" rows="4" cols="30" style="height:80px;"></textarea></p><p><input class="contactable-submit" type="submit" value="ОТПРАВИТЬ"></p><p class="contactable-disclaimer">Ответ на вопрос будет отправлен на указанный Вами e-mail в ближайшее время.</p></div></form></div>
        <div id="contactable-overlay"></div>
 
        <div id="callmeform" class="hide-off"><div id="cme_cls"></div><h6>Заказать обратный звонок</h6>
            <table cellpadding="0" cellspacing="0">
                <tbody><tr><td>Ваше имя <span style="color:red"> * </span></td></tr>
                    <tr><td><input class="txt" type="text" maxlength="150" id="cname" value=""></td></tr>
                    <tr><td>Ваш телефон <span style="color:red"> * </span></td></tr>
                    <tr><td><input class="txt" type="text" maxlength="150" value="" id="cphone"></td></tr>
                    <tr><td>Комментарий</td></tr>
                    <tr><td><input class="txt" type="text" maxlength="1000" id="ccmnt"></td></tr>
                    <tr><td><div id="cm_crds"></div><input class="btn" type="button" value="Отправить"></td></tr>
                </tbody></table>
            <div id="callme_result"></div>

        </div></div><div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div>
        <div id="topcontrol" title="Наверх" style="position: fixed; bottom: 0px; left: 0px; opacity: 1; cursor: pointer;">
            
<a href="#up-top"><img src="/./images/top.png" class="iefix" style="width:60px; height:90px"></a>

        </div>
        <div style="position: absolute; visibility: hidden;">
            <div></div>
        </div>
        
            <?php
\yii\bootstrap\Modal::begin([
    'header' => '<h2>Корзина</h2>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
        <a class="btn btn-success" href="' . \yii\helpers\Url::to(['cart/view']) . '" >Оформить заказ</a>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>'
]);


\yii\bootstrap\Modal::end();
?>
            
        
        <?php $this->endBody() ?>
 
</body>
</html>
<?php $this->endPage() ?>


