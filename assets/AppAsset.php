<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'css/stylesheet.css',
        'css/nubuk_responsive.css',
       // 'css/radio.css', //
        //'css/jquery.fancybox-1.3.4.css', //
       // 'css/nivo-slider.css', //
       // 'css/default.css', //
        'css/contactable.css',
       // 'css/responsive.css',
      //  'css/font-awesome.min.css',
      // 'css/animate.css',
       // 'css/bootstrap.min.css',
        'css/callme.css',
      // 'css/default.css',
       // 'css/main.css',
        //'css/prettyPhoto.css',
        //'css/price-range.css',
       // 'css/demoStyleSheet.css',//слайдер
    ];
    public $js = [

        //'js/jquery.easing-1.3.pack.js',
        //'js/jquery.fancybox-1.3.4.pack.js',
        //'js/jquery.mousewheel-3.0.4.pack.js',
        //'js/ajax_add.js',
        //'js/jquery.radio.min.js',
        //'js/jquery.nivo.slider.pack.js',
        //'js/jquery.touchSwipe.min.js',
        //'js/fancybox.js',
        //'js/tab.js',
        //'js/boxOver.js',
        // 'js/bookmark.js',
        //'js/scrolltopcontrol.js',
        //'js/nivoSlider.js',//Slider
        // 'js/remarketing.js',
        'js/main.js',
      //  'js/fadeSlideShow.js',//слайдер
       // 'js/jquery.js',//слайдер
        //'js/fadeSlideShow-minified.js',//слайдер
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
