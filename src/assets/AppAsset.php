<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/default.css',
        'css/font-awesome.min.css',
        'css/LineIcons.css',
        'css/site.css',
        'css/slick.css',
        'css/style.css',
        'css/simple-sidebar.css',
        'fonts/LineIcons.ttf'
    ];
    public $js = [
        'js/vendor/modernizr-3.7.1.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/plugins.js',
        'js/slick.min.js',
        'js/waypoints.min.js',
        'js/jquery.counterup.min.js',
        'js/jquery.appear.min.js',
        'js/wow.min.js',
        'js/headroom.min.js',
        'js/jquery.nav.js',
        'js/scrollIt.min.js',
        'js/main.js',
        'js/jquery.pjax.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
