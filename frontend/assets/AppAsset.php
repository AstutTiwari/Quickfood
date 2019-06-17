<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.min.css',
        'css/bootstrap.min.css',
        'css/menu.css',
        'css/style.css',
        'css/responsive.css',
        'css/elegant_font/elegant_font.min.css',
        'css/fontello/css/fontello.min.css',
        'css/magnific-popup.css',
        'css/pop_up.css',
        'css/custom.css',
         'css/site.css',
    ];
    public $js = [
        'js/modernizr.js',
        'js/jquery-2.2.4.min.js',
        'js/common_scripts_min.js',
        'js/functions.js',
        'assets/validate.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
