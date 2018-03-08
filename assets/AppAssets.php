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
class AppAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/blueimp-gallery.min.css',
        'css/dropdown-menu.css',
        'css/fm.checkator.jquery.css',
        'css/font-awesome.min.css',
        'css/jquery.autocomplete.css',
        'css/jquery.fancybox.css',
        'css/Lato-Black.css',
        'css/Lato-Regular.css',
        'css/ptsans.css',
        'css/siga.css',
        'css/ptsans.css',
        'css/simple-line-icons.css',
        'css/star_rating.css',
       
    ];
    public $js = [
         'js/bootstrap-tooltip.js',
        
         'js/jquery.autocomplete.js',
       
         'js/main.js',
       
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
