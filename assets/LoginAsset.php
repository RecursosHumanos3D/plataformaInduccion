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
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/dropdown-menu.css',
        'css/font-awesome.min.css',
        
        'css/Lato-Black.css',
        'css/Lato-Regular.css',
        'css/bebas.css',
    
        'css/roboto.css',
        'css/bootstrap.css',
        'css/stylesiga.css',
       
       
    ];
    public $js = [
         'js/formvalida.js',
         'js/funciones(1).js',
         'js/funciones.js',
         'js/funciones_javascript.js',
         'js/html5.js',
         'js/jquery.js',
         'js/jquery.jticker.min.js',
         'js/jquery.Rut.js',
         'js/jquery.validate.js',
         'js/jquery-2.1.1.min.js',
         'js/jquery-migrate-1.2.1.min.js',
         'js/jquery-ui.js',
         'js/jwplayer.js',
         'js/like_objeto.js',
         'js/main.js',
         'js/megusta.js',
         'js/respond.js',
    ];
    public $depends = [
     
        'yii\bootstrap\BootstrapAsset',
    ];
}
