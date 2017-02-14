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
    <title>админка | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php $this->registerCssFile('/css/main.css', 
            ['position' => \yii\web\View::POS_HEAD]);
    ?>

</head>
<body class="home lang_ru">
    <?php $this->beginBody() ?>
    <div id="main_container">
        <div id="header" class="clearfix">
             <a href="<?= \yii\helpers\Url::home()?>" class="logo"><h1>Магазин обуви</h1><!--<?= Html::img('@web/images/logo.png', ['alt' =>'магазин обуви'])?>--></a>
            <div class="right clearfix">
               <!-- <div id="header_cart">
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
                </div>-->
                <div class="col-r">
                    <div class="contact">
                        Прием заказов:
                        <span><i>(096)</i> 921 66 29</span>
                        <span><i>(066)</i> 821 09 37</span>
                        <span><i>(063)</i> 145 54 97</span>
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
            <div class="crumb_navigation"></div>

                <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="<?=\yii\helpers\Url::to(['/admin']) ?>" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Категории<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['category/index']) ?>">Список категорий</a></li>
                                        <li><a href="<?=\yii\helpers\Url::to(['category/create']) ?>">Добавить категорию</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Производители<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['manufacturer/index']) ?>">Список производителей</a></li>
                                        <li><a href="<?=\yii\helpers\Url::to(['manufacturer/create']) ?>">Добавить производителя</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Товары<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['product/index']) ?>">Список товаров</a></li>
                                        <li><a href="<?=\yii\helpers\Url::to(['product/create']) ?>">Добавить товар</a></li>
                                    </ul>
                                </li>
                                 <li class="dropdown"><a href="#">Статьи<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['texts/index']) ?>">Список статей</a></li>
                                        <li><a href="<?=\yii\helpers\Url::to(['texts/create']) ?>">Добавить статью</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Коментарии<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['coment/index']) ?>">Список коментариев</a></li>
                                        <li><a href="<?=\yii\helpers\Url::to(['coment/create']) ?>">Добавить коментарий</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
            <div class="container1"> 
                <?php if (Yii::$app->session->hasFlash('success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo Yii::$app->session->getFlash('success'); ?>
                    </div>
                <?php endif; ?>
            <?= $content ?>
            </div>
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

        <div id="contactable"><div id="contactable-inner"><span class="c_close">123</span></div><form id="contactable-contactForm" method="" action="http://nubuck.com.ua/"><div id="contactable-loading"></div><div id="contactable-callback"></div><div class="contactable-holder"><p style="color:#A74F00; font-size:15px; font-weight:bold; padding: 15px 0 10px 2px;">Задать вопрос</p><p><label for="contactable-name">Ваше имя<span class="contactable-green"> * </span></label><br><input id="contactable-name" class="contactable-contact contactable-validate" name="name"></p><p><label for="contactable-email">Ваш E-mail <span class="contactable-green"> * </span></label><br><input id="contactable-email" class="contactable-contact contactable-validate" name="email"></p><p><label for="contactable-message">Сообщение <span class="contactable-green"> * </span></label><br><textarea id="contactable-message" name="message" class="contactable-message contactable-validate" rows="4" cols="30" style="height:80px;"></textarea></p><p><input class="contactable-submit" type="submit" value="ОТПРАВИТЬ"></p><p class="contactable-disclaimer">Ответ на вопрос будет отправлен на указанный Вами e-mail в ближайшее время.</p></div></form></div>
        <div id="contactable-overlay"></div>
 
        </div>
            <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


