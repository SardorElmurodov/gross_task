<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
		'css/style.css',
		'css/bootstrap.min.css',
		'css/jquery-ui.css',
    ];
    public $js = [
		'js/jquery-3.4.1.js',
		'js/jquery-ui.js',
		'js/calc.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
