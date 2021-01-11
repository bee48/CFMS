<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Admin LTE asset bundle
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
	    'plugins/fontawesome-free/css/all.min.css',
	    'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
	    'css/adminlte.min.css',
    ];
    public $js = [
    	'plugins/jquery/jquery.min.js',
    	'plugins/bootstrap/js/bootstrap.bundle.min.js',
	    'js/adminlte.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
