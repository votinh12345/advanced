<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/bootstrap.css',
        'assets/css/stylesheet.css',
        'assets/css/font.css',
        'assets/css/paneltool.css',
        'assets/css/animate.css',
        'assets/js/jquery/magnific/magnific-popup.css',
        'assets/js/jquery/colorpicker/css/colorpicker.css',
        'assets/js/font-awesome/css/font-awesome.min.css',
        'assets/js/jquery/magnific/magnific-popup.css',
        'assets/css/homebuilder.css',
        'assets/css/sliderlayer/css/typo.css',
        'assets/css/pavnewsletter.css',
        'assets/js/perfect-scrollbar/css/perfect-scrollbar.css',
        'assets/js/owl-carousel/owl.carousel.css',
    ];
    public $js = [
        'assets/js/jquery/jquery-2.1.1.min.js',
        'assets/js/jquery/magnific/jquery.magnific-popup.min.js',
        'assets/js/bootstrap/js/bootstrap.min.js',
        'assets/js/common_new.js',
        'assets/js/common.js',
        'assets/js/jquery/owl-carousel/owl.carousel.min.js',
        'assets/js/pavdeals/countdown.js',
        'assets/js/jquery/colorpicker/js/colorpicker.js',
        'assets/js/layerslider/jquery.themepunch.plugins.min.js',
        'assets/js/layerslider/jquery.themepunch.revolution.min.js',
        'assets/js/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js',
        'assets/js/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
