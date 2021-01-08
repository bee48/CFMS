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
class AdminLteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/custom.css',
	    'css/adminlte.min.css',
	    'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
		'plugins/fontawesome-free/css/all.min.css',
	    'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
	    'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
	    'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
	    'plugins/jqvmap/jqvmap.min.css',
	    'plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
	    'plugins/daterangepicker/daterangepicker.css',
	    'plugins/summernote/summernote-bs4.min.css'
    ];
    public $js = [
    	'plugins/jquery/jquery.min.js',
    	'plugins/jquery-ui/jquery-ui.min.js',
    	'plugins/bootstrap/js/bootstrap.bundle.min.js',
    	'plugins/chart.js/Chart.min.js',
    	'plugins/sparklines/sparkline.js',
    	'plugins/jqvmap/jquery.vmap.min.js',
    	'plugins/jqvmap/maps/jquery.vmap.usa.js',
    	'plugins/jquery-knob/jquery.knob.min.js',
    	'plugins/moment/moment.min.js',
    	'plugins/daterangepicker/daterangepicker.js',
    	'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    	'plugins/summernote/summernote-bs4.min.js',
    	'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
	    'js/adminlte.js',
	    'js/demo.js',
	    'js/pages/dashboard.js',

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
