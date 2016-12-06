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
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        ''
    ];
    public $js = [
        'js/html5zoo.js?ver=v0.0.1',
        'js/lovelygallery.js?ver=v0.0.1'
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
