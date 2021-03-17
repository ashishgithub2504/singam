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
        // 'css/site.css',
        '/css/bootstrap.min.css',
        '/css/fontawsom-all.min.css',
        '/css/style.css',
        '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
        'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'
    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/popper.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
        'js/bootstrap.min.js',
        'plugins/scroll-fixed/jquery-scrolltofixed-min.js',
        'js/script.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
