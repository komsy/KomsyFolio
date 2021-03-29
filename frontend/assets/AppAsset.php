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
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/font-awesome/css/font-awesome.min.css',
        'vendor/ionicons/css/ionicons.min.css',
        'vendor/owl.carousel/assets/owl.carousel.min.css',
        'vendor/venobox/venobox.css',
        'css/style.css',
    ];
    public $js = [
        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery.easing/jquery.easing.min.js',
        'vendor/php-email-form/validate.js',
        'vendor/waypoints/jquery.waypoints.min.js',
        'vendor/counterup/jquery.counterup.min.js',
        'vendor/owl.carousel/owl.carousel.min.js',
        'vendor/typed.js/typed.min.js',
        'vendor/venobox/venobox.min.js',
        'js/main.js',
    ];
   public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
