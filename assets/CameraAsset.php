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
class CameraAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/camera/component.css',
        'css/camera/demo.css',
        'css/camera/normalize.css'
    ];
    public $js = [
        'js/camera/modernizr.custom.js',
        'js/camera/classie.js',
        'js/camera/grid3d.js',
        'js/camera/helper.js',
        
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
