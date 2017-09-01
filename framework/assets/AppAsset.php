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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'css/animate.css',
        'css/app.css',
        'css/font-awesome.min.css',
        'css/simple-line-icons.css',
        'css/font.css',
        'js/jPlayer/jplayer.flat.css',
    ];
    public $js = [
        "js/bootstrap.js",
        "js/app.js",
        "js/slimscroll/jquery.slimscroll.min.js",
        "js/app.plugin.js",
        "js/jPlayer/jquery.jplayer.min.js",
        "js/jPlayer/add-on/jplayer.playlist.min.js",
        "js/jPlayer/demo.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
